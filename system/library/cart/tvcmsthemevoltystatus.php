<?php
namespace Cart;
class Tvcmsthemevoltystatus {
    private $lengths = array();
  
    public function categorysliderstatus(){
        $result = array();
        
        $result['main_form']                = 1;
        $result['main_title']               = 1;
        $result['main_short_description']   = 0;
        $result['main_description']         = 0;
        $result['main_image']               = 0;

        // Choose only True or False
        // This is Record Information...
        // You Can not all value False...

        $result['record_form']              = true;
        $result['category_title']           = true;
        $result['image']                    = true;
        $result['title']                    = true;
        $result['short_description']        = 0;
        return $result;
    }
    public function customlinkstatus(){
        $result = array();
        
        // Choose only True or False
        // Main Title Releted Information

        $result['main_form']                = 0;
        $result['main_title']               = 1;
        $result['main_short_description']   = 1;

        // Main Title Record Releted Information

        $result['record_form']              = 1;
        $result['title']                    = 1;
        $result['link']                     = 1;
        return $result;
    }
    public function customerservicestatus(){

        $result = array();
        $result['main_form']                = 1;
        $result['main_title']               = 0;
        $result['main_short_description']   = 0;
        $result['main_description']         = 0;
        $result['main_image']               = 0;
        $result['record_form']              = true;

        // Number of Services 3 or 4
        $result['num_services']             = 5;

        // Images is Updload or Not
        // if true (one) then Image Upload Field is Show Otherwise 0 (zero) is not;
        $result['image_upload']             = 0;
        return $result;
    }
    public function tabproductstatus(){
        $result = array();

        // Main Title Information
        $result['cust_prod']['main_form']                   = true;
        $result['cust_prod']['main_title']                  = 1;
        $result['cust_prod']['main_sub_title']              = 0;
        $result['cust_prod']['main_description']            = 0;
        $result['cust_prod']['main_image']                  = 0;
        $result['cust_prod']['main_image_status']           = 0;

        // Featured Product Form
        $result['featured_prod']['main_form']               = 1;
        $result['featured_prod']['tab_title']               = 1;
        $result['featured_prod']['home_image_status']       = 1;
        $result['featured_prod']['num_of_prod']             = 1;
        $result['featured_prod']['prod_cat']                = 1;
        $result['featured_prod']['random_prod']             = 1;
        $result['featured_prod']['display_in_tab']          = 1;
        $result['featured_prod']['home_title']              = 1;
        $result['featured_prod']['home_sub_title']          = 0;
        $result['featured_prod']['home_description']        = 0;
        $result['featured_prod']['home_image']              = 0;

        // New Product form
        $result['new_prod']['main_form']                    = 1;
        $result['new_prod']['tab_title']                    = 1;
        $result['new_prod']['home_image_status']            = 1;
        $result['new_prod']['num_of_prod']                  = 1;
        $result['new_prod']['num_of_days']                  = 1;
        $result['new_prod']['display_in_tab']               = 1;
        $result['new_prod']['home_title']                   = 1;
        $result['new_prod']['home_sub_title']               = 0;
        $result['new_prod']['home_description']             = 0;
        $result['new_prod']['home_image']                   = 0;

        // Best Seller Product Form
        $result['best_seller_prod']['main_form']            = 1;
        $result['best_seller_prod']['tab_title']            = 1;
        $result['best_seller_prod']['home_image_status']    = true;
        $result['best_seller_prod']['num_of_prod']          = true;
        $result['best_seller_prod']['display_in_tab']       = true;
        $result['best_seller_prod']['home_title']           = 1;
        $result['best_seller_prod']['home_sub_title']       = 0;
        $result['best_seller_prod']['home_description']     = 0;
        $result['best_seller_prod']['home_image']           = 0;

        // Special Product Form
        $result['special_prod']['main_form']                = 1;
        $result['special_prod']['tab_title']                = 1;
        $result['special_prod']['home_title']               = 1;
        $result['special_prod']['home_image_status']        = 1;
        $result['special_prod']['num_of_prod']              = 1;
        $result['special_prod']['display_in_tab']           = 1;
        $result['special_prod']['home_sub_title']           = 0;
        $result['special_prod']['home_description']         = 0;
        $result['special_prod']['home_image']               = 0;

        return $result;
    }   
    public function bannersstatus(){
        $result = array();
        
        $result['main_form']                                = 0;
        $result['main_title']                               = 1;
        $result['main_short_description']                   = 1;
        $result['main_description']                         = 1;
        $result['main_image']                               = 1;

        // Choose only 1 or 1
        // This is Record Information...
        // You Can not all value 1...

        $result['record_form']                              = 1;
        $result['title']                                    = 1;
        $result['short_description']                        = 1;
        $result['description']                              = 1;
        $result['btntext']                                  = 1;
        $result['image']                                    = 1;
        $result['link']                                     = 1;
        $result['status']                                   = 1;
        return $result;
    }
    public function brandstatus(){
        $result = array();
        
        $result['main_form']                = 0;
        $result['main_title']               = true;
        $result['main_short_description']   = true;
        $result['main_description']         = true;
        $result['main_image']               = true;

        // Choose only True or true
        // This is Record Information...
        // You Can not all value true...

        $result['record_form']          = true;
        $result['title']                = 0;
        $result['short_description']    = 0;
        $result['description']          = 0;
        $result['image']                = true;
        $result['link']                 = true;
        $result['status']               = true;
        return $result;
    }
    public function tagstatus(){
        $result = array();
        
        // Choose only True or False

        // Main Title Releted Information
        $result['main_form']                = 0;
        $result['main_title']               = 1;
        $result['main_short_description']   = 1;


        // Main Title Record Releted Information
        $result['record_form']              = true;
        $result['title']                    = true;
        $result['link']                     = 1;
        $result['status']                   = true;
        return $result;
    }
    public function testimonialstatus(){
        $result = array();
        
        $result['main_form']                = 0;
        $result['main_title']               = 1;
        $result['main_short_description']   = 0;
        $result['main_description']         = 1;
        $result['main_image']               = 0;

        // Choose only True or true
        // This is Record Information...
        // You Can not all value true...

        $result['record_form']              = true;
        $result['description']              = true;
        $result['title']                    = 1;
        $result['designation']              = true;
        $result['signature_text']           = 0;
        $result['short_description']        = 0;
        $result['image']                    = 1;
        $result['signature_image']          = 0;
        $result['link']                     = 1;
        $result['status']                   = true;

        return $result;
    }
    public function socialiconstatus(){
        $result = array();
        
        $result['main_form']                = 1;
        $result['main_image']               = 0;
        $result['main_title']               = 1;
        $result['main_short_description']   = 0;
        $result['main_description']         = 0;

        // Choose only True or False
        // This is Record Information...
        // You Can not all value False...

        $result['record_form']              = true;
        $result['title']                    = 0;
        $result['link']                     = true;
        $result['class_name']               = true;

        return $result;
    }
    public function paymenticonsatus(){
        $result = array();
        
        $result['main_form']                = 0;
        $result['main_title']               = true;
        $result['main_short_description']   = true;
        $result['main_description']         = true;
        $result['main_image']               = true;

        // Choose only True or true
        // This is Record Information...
        // You Can not all value true...

        $result['record_form']              = true;
        $result['title']                    = true;
        $result['image']                    = true;
        $result['link']                     = true;
        return $result;
    }
    public function mapstatus(){
        $result = array();
        
        $result['main_form']                = true;
        $result['main_title']               = true;
        $result['main_short_description']   = true;
        $result['main_description']         = true;
        $result['main_image']               = true;
        $result['record_form']              = true;
        $result['image']                    = true;
        $result['title']                    = true;
        $result['short_description']        = true;
        $result['description']              = true;
        $result['btn_title']                = true;
        $result['api_key']                  = true;
        $result['map_type']                 = true;
        $result['zoom']                     = true;
        $result['letitude']                 = true;
        $result['longitude']                = true;

        return $result;
    }
    public function footerstatus(){
        $result = array();
        
        $result['main_form']                = true;
        $result['main_title']               = 0;
        $result['main_short_description']   = true;
        $result['main_description']         = 0;
        $result['main_image']               = true;
        return $result;
    }
    public function customsetting(){
        $result = array();
        // Theme Configuration
        $result['form_1']                       = 1;

        $result['all_theme_option_info']        = 1;
        $result['wow_js']                       = 0;
        $result['product_color']                = 0;
        $result['vertical_menu_open']           = 0;

        $result['page_loader']                  = 1;
        $result['mouse_hover_image']            = 1;
        $result['tab_product_double_row']       = 1;
        $result['main_menu_sticky']             = 1;
        $result['bottom_sticky']                = 0;

        // Offer Banner
        $result['form_2']                       = 0;
        $result['top_offer_banner']             = 1;
        $result['top_offer_banner_status']      = 1;

        // App Link
        $result['form_3']                       = 0;
        $result['apple_app_link']               = true;
        $result['google_app_link']              = true;
        $result['microsoft_app_link']           = true;
        $result['app_link_status']              = true;

        // Custom Titles
        $result['copy_right_info']              = 0;

        $result['form_4']                       = 1;
        $result['copy_right_text']              = 1;
        $result['copy_right_link']              = 1;
        $result['copy_right_text_status']       = 1;
        $result['custom_text']                  = 1;


        // If You want to off Footer tab product Then off footer_tab_product = false
        // Otherwise off Other Option
        $result['footer_tab_product_info']              = true;
        $result['footer_tab_prod_status']               = true;
        $result['news_letter_title']                    = true;
        $result['news_letter_short_desc']               = true;

        return $result;
    }
    public function advanceblock(){
        $result = array();
        
        $result['main_form']                            = 0;
        $result['main_title']                           = 1;
        $result['main_short_description']               = 1;
        $result['main_description']                     = 1;
        $result['main_image']                           = 1;

        $result['main_block_form']                      = 1;
        $result['main_block_title']                     = 1;
        $result['main_block_short_description']         = 0;
        $result['main_block_description']               = 1;
        $result['main_block_btn_caption']               = 1;
        $result['main_block_link']                      = 1;
        $result['main_block_image']                     = 1;

        // Choose only True or False
        // This is Record Information...
        // You Can not all value False...

        $result['record_form']                          = 0;
        $result['title']                                = 1;
        $result['short_description']                    = 1;
        $result['description']                          = 1;
        $result['image']                                = 1;
        $result['link']                                 = 1;
        return $result;
    }
   public function multibannertatus(){

        $result = array();
        $result['main_form']                = 0;
        $result['main_title']               = 1;
        $result['main_short_description']   = 1;
        $result['main_description']         = 1;
        $result['main_image']               = 1;
        $result['record_form']              = 1;

        // Number of Services 3 or 4
        $result['num_services']             = 4;
        $result['title']                    = 1;
        $result['subtitle']                 = 1;
        $result['description']              = 0;
        $result['btncaption']               = 1;

        // Images is Updload or Not
        // if 1 (one) then Image Upload Field is Show Otherwise 0 (zero) is not;
        $result['image_upload']             = 1;
        return $result;
    }
    public function imageslider(){

        $result                             = array();
        $result['record_targeturl']         = 1;
        $result['record_title']             = 1;
        $result['record_descriptionmain']   = 1;
        $result['record_descriptionsub']    = 1;
        $result['record_image']             = 1;
        $result['record_textalignment']     = 1;
        $result['record_buttoncaption']     = 1;

        return $result;
    }
    public function singleblock(){
        $result = array();
        
        $result['main_image']               = 0;
        $result['main_title']               = 0;
        $result['main_sub_title']           = 0;
        $result['main_description']         = 0;

        $result['link']                     = 1;
        $result['image']                    = 1;
        $result['title']                    = 1;
        $result['shortdescription']         = 0;
        $result['description']              = 1;
        $result['buttoncaption']            = 1;

        return $result;
    }
}
