<?php

//CONFIGURATION for SmartAdmin UI

//ribbon breadcrumbs config
//array("Display Name" => "URL");
$breadcrumbs = array(
	"Home" => APP_URL
);

/*navigation array config

ex:
"dashboard" => array(
	"title" => "Display Title",
	"url" => "http://yoururl.com",
	"url_target" => "_self",
	"icon" => "fa-home",
	"label_htm" => "<span>Add your custom label/badge html here</span>",
	"sub" => array() //contains array of sub items with the same format as the parent
)

*/
$page_nav = array(
	"dashboard" => array(
		"title" => "Dashboard",
		"url" => '/sisl/public/backend/dashboard/index',
		"icon" => "fa-home"
	),
	"pages" => array(
		"title" => "Pages",
		"icon" => "fa-code",
		"sub" => array(

			"list" => array(
				"title" => "All Pages",
				"url" => '/sisl/public/backend/pages/index'
			),
			"addnew" => array(
				"title" => "Add New",
				"url" => '/sisl/public/backend/pages/addnew'
			)
		)
	),

	"posts" => array(
		"title" => "Posts",
		"icon" => "fa-bar-chart-o",
		"sub" => array(
			"list" => array(
				"title" => "All Post",
				"url" => '/sisl/public/backend/posts/index',
                "label_htm" => ' <span class="badge inbox-badge bg-color-greenLight">10</span>'
			),
			"addnew" => array(
				"title" => "Add New",
				"url" => '/sisl/public/backend/posts/addnew'
			),
            "categories" => array(
                "title" => "All Categories",
                "url" => "/sisl/public/backend/categories/index"
            )
		)
	),

	"frontend" => array(
		"title" => "Frontend",
		"icon" => "fa-windows",
		"sub" => array(
			"slideshow" => array(
		        "title" => "Slide Show",
		        "icon" => "fa-file",
		        "sub" => array(
		            "list" => array(
		                "title" => "All Slides",
		                "url" => "/sisl/public/backend/sliders/index"
		            ),
		            "slideimage" => array(
		                "title" => "Manage Slide Image",
		                "url" => "/sisl/public/backend/sliders/manageimages"
		            )
		        )
		    ),
            "menu" => array(
				"title" => "Manage Frontend Menu",
				"url" => "/sisl/public/backend/menu/index"
			),
            "preview" => array(
				"title" => "Preview Website",
				"url" => "/sisl/public"
			),
            "document"=>array(
                "title"=>"Documents",
                "icon"=>"fa-download",
                "sub" => array(
                    "list" => array(
                        "title" => "All Listing",
                        "url"=>"/sisl/public/backend/documents/index"
                    ),
                    "category" => array(
                        "title" => "Category Listing",
                        "url"=>"/sisl/public/backend/documents/category"
                    )
                )

            ),
            "pageblock"=>array(
                "title"=>"Page Blocks",
                "url"=>"/sisl/public/backend/pageblocks/index"
            )

		)
	),

    "account" => array(
        "title" => "Accounts",
        "icon" => "fa-windows",
        "url"=>""

    ),
    "research" => array(
        "title" => "Reserach",
        "icon" => "fa-windows",
        "sub"=>array(
            "corporate"=>array(
                "title"=>"Corporate Action",
                "url"=>"/sisl/public/backend/researches/corporateaction"
            )
        )

    ),

    "stock" => array(
        "title" => "Stock Price List",
        "icon" => "fa-windows",
        "url"=>"/sisl/public/backend/stock/index"
    ),
    "admin"=>array(
        "title"=>"Administrator",
        "icon"=>"fa-users",
        "sub"=>array(
            "list"=>array(
                "title"=>"Admin Listing",
                "url"=>"/sisl/public/backend/administrators/index"
            ),
            "addnew"=>array(
                "title"=>"Add New",
                "url"=>"/sisl/public/backend/administrators/addnew"
            )
        )
    )
);

//configuration variables
$page_title = "";
$page_css = array();
$no_main_header = false; //set true for lock.php and login.php
$page_body_prop = array(); //optional properties for <body>
$page_html_prop = array(); //optional properties for <html>
?>