// get current single category page id ( archive page id except the shop page )
$category = get_queried_object();
echo $category->term_id;

//example:
function action_woocommerce_before_shop_loop( $woocommerce_catalog_ordering, $int = NULL ) { 
	$category_specific_title = "Shop or select registry activities, events and gifts";
	$category = get_queried_object();
	if (!is_null($category) && isset($category->term_id)) {
		if($category->term_id == 54){
			$category_specific_title = "Gift Certificates";
		}
	}
}


//alternative method
	$single_cat_title = single_cat_title('',false);
	if($single_cat_title == "Gift Certificate"){
		echo "alright it's the gift certificate archive page";
	}


//woocommerce way
https://docs.woocommerce.com/document/conditional-tags/
