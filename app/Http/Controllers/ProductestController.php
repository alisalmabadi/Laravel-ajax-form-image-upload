<?php

namespace App\Http\Controllers;

use App\ProductPic;
use Illuminate\Http\Request;

class ProductestController extends Controller
{
    public function index(){
        return view('productest');
    }

    public function post(Request $data){
        if($data){
        $layers_btn = $data->layersButton ? $data->layersButton : 'مدیریت لایه ها';
        $adds_btn = $data->addsButton ? $data->addsButton : 'افزودن عنصر';
        $products_btn = $data->productsButton ? $data->productsButton : 'تغییر محصولات';
        $more_btn = $data->moreButton ? $data->moreButton : 'کارها';
        $download_image = $data->downloadImage ? $data->downloadImage : 'دانلود عکس';
        $print = $data->print ? $data->print : 'پرینت';
        $pdf = $data->downLoadPDF ? $data->downLoadPDF : 'دانلود pdf';
        $save_product = $data->saveProduct ? $data->saveProduct : 'ذخیره کردن';
        $load_saved_products = $data->loadProduct ? $data->loadProduct : 'بارگزاری کردن';

//sub bar
        $undo_btn = $data->undoButton ? $data->undoButton : 'برگشت به عقب';
        $redo_btn = $data->redoButton ? $data->redoButton : 'رفتن به قدم بعدی';
        $reset_product_btn = $data->resetProductButton ? $data->resetProductButton : 'دکمه ریست';
        $zoom_btn = $data->zoomButton ? $data->zoomButton : 'زوم';
        $pan_btn = $data->panButton ? $data->panButton : 'کفه';

//adds
        $add_image_btn = $data->addImageButton ? $data->addImageButton : 'افزودن طرح شما';
        $add_text_btn = $data->addTextButton ? $data->addTextButton : 'افزودن متن شما';
        $enter_text = $data->enterText ? $data->enterText : 'افزودن متن مورد نظر شما';
        $add_fb_btn = $data->addFBButton ? $data->addFBButton : 'افزودن عکس از فیس بوک';
        $add_insta_btn = $data->addInstaButton ? $data->addInstaButton : 'افزودن عکس از اینستاگرام';
        $add_design_btn = $data->addDesignButton ? $data->addDesignButton : 'از طرح ها انتخاب کنید';

//Fill Options
        $fill_options = $data->fillOptions ? $data->fillOptions : 'تنظیمات را کامل نمایید.';
        $color = $data->color ? $data->color : 'رنگ';
        $patterns = $data->patterns ? $data->patterns : 'پترن ها';
        $opacity = $data->opacity ? $data->opacity : 'شفافیت';
//Filter Options
        $filter = $data->filter ? $data->filter : 'فیلتر';
//Text Options
        $text_options = $data->textOptions ? $data->textOptions : 'تنظیمات متن';
        $change_text = $data->changeText ? $data->changeText : 'تغییر متن';
        $typeface = $data->typeface ? $data->typeface : 'نوع متن';
        $line_height = $data->lineHeight ? $data->lineHeight : 'فاصله بین خطوط';
        $text_align = $data->textAlign ? $data->textAlign : 'ترازبندی';
        $text_align_left = $data->textAlignLeft ? $data->textAlignLeft : 'چپ چین';
        $text_align_center = $data->textAlignCenter ? $data->textAlignCenter : 'وسط چین';
        $text_align_right = $data->textAlignRight ? $data->textAlignRight : 'راست چین';
        $text_styling = $data->textStyling ? $data->textStyling : 'استایل دهی';
        $bold = $data->bold ? $data->bold : 'بولد';
        $italic = $data->italic ? $data->italic : 'ایتالیک';
        $underline = $data->underline ? $data->underline : 'خط زیر متن';
//Curved Text Options
        $curved_text = $data->curvedText ? $data->curvedText : 'خطوط منحنی';
        $curved_text_spacing = $data->curvedTextSpacing ? $data->curvedTextSpacing : 'فاصله';
        $curved_text_radius = $data->curvedTextRadius ? $data->curvedTextRadius : 'شعاع';
        $curved_text_reverse = $data->curvedTextReverse ? $data->curvedTextReverse : 'معکوس';
//Transform Options
        $transform = $data->transform ? $data->transform : 'جابه جایی';
        $angle = $data->angle ? $data->angle : 'زاویه';
        $scale = $data->scale ? $data->scale : 'مقیاس';
//Helper Buttons
        $move_up = $data->moveUp ? $data->moveUp : 'بالا بردن';
        $move_down = $data->moveDown ? $data->moveDown : 'پایین بردن';
        $center_h = $data->centerH ? $data->centerH : 'مرکز افقی';
        $center_v = $data->centerV ? $data->centerV : 'مرکز عمودی';
        $flip_horizontal = $data->flipHorizontal ? $data->flipHorizontal : 'افقی';
        $flip_vertical = $data->flipVertical ? $data->flipVertical : 'عمودی';
        $reset_element = $data->resetElement ? $data->resetElement : 'ریست کردن عنصر';

//facebook
        $fb_select_album = $data->fbSelectAlbum ? $data->fbSelectAlbum : 'یک آلبوم را برگزینید';

//instagram
        $insta_feed_button = $data->instaFeedButton ? $data->instaFeedButton : 'فید اینستاگرام';
        $insta_recent_images_button = $data->instaRecentImagesButton ? $data->instaRecentImagesButton : 'عکس های اخیر من';

        return view('productdesigner',[
            'layers_btn'=>$layers_btn,
            'adds_btn'=>$adds_btn,
            'products_btn'=>$products_btn,
            'more_btn'=>$more_btn,
            'download_image'=>$download_image,
            'print'=>$print,
            'pdf'=>$pdf,
            'save_product'=>$save_product,
            'load_saved_products'=>$load_saved_products,
            'undo_btn'=>$undo_btn,
            'redo_btn'=>$redo_btn,
            'reset_product_btn'=>$reset_product_btn,
            'zoom_btn'=>$zoom_btn,
            'pan_btn'=>$pan_btn,
            'add_image_btn'=>$add_image_btn,
            'add_text_btn'=>$add_text_btn,
            'enter_text'=>$enter_text,
            'add_fb_btn'=>$add_fb_btn,
            'add_insta_btn'=>$add_insta_btn,
            'add_design_btn'=>$add_design_btn,
            'fill_options'=>$fill_options,
            'color'=>$color,
            'patterns'=>$patterns,
            'opacity'=>$opacity,
            'filter'=>$filter,
            'text_options'=>$text_options,
            'change_text'=>$change_text,
            'typeface'=>$typeface,
            'line_height'=>$line_height,
            'text_align'=>$text_align,
            'text_align_left'=>$text_align_left,
            'text_align_center'=>$text_align_center,
            'text_align_right'=>$text_align_right,
            'text_styling'=>$text_styling,
            'bold'=>$bold,
            'italic'=>$italic,
            'underline'=>$underline,
            'curved_text'=>$curved_text,
            'curved_text_spacing'=>$curved_text_spacing,
            'curved_text_radius'=>$curved_text_radius,
            'curved_text_reverse'=>$curved_text_reverse,
            'transform'=>$transform,
            'angle'=>$angle,
            'scale'=>$scale,
            'move_up'=>$move_up,
            'move_down'=>$move_down,
            'center_h'=>$center_h,
            'center_v'=>$center_v,
            'flip_horizontal'=>$flip_horizontal,
            'flip_vertical'=>$flip_vertical,
            'reset_element'=>$reset_element,
            'fb_select_album'=>$fb_select_album,
            'insta_feed_button'=>$insta_feed_button,
            'insta_recent_images_button'=>$insta_recent_images_button
            ]);
        }else{
            return view('error');
        }
    }
}
