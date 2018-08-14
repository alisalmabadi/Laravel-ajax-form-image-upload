jQuery.fn.removeInlineCss = (function(){
    var rootStyle = document.documentElement.style;
    var remover = 
        rootStyle.removeProperty    // modern browser
        || rootStyle.removeAttribute   // old browser (ie 6-8)
    return function removeInlineCss(properties){
        if(properties == null)
            return this.removeAttr('style');
        proporties = properties.split(/\s+/);
        return this.each(function(){
            for(var i = 0 ; i < proporties.length ; i++)
                remover.call(this.style, proporties[i]);
        });
    };
})();