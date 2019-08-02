<?php

/* __string_template__c6ba9ae6466c8eb22a1540b62ca2fd611f065e9a8f41f0084ef3858a8eb23e64 */
class __TwigTemplate_6b09e33787d65ca0d5bfe8788c5a828f675063e26970e513150041a5f212f5f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/e-commerce/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/e-commerce/img/app_icon.png\" />

<title>Performances • Seyzy'Store</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'SN';
    var _PS_VERSION_ = '1.7.5.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '2a5e8b9042f730102643d714260e5561';
    var token_admin_orders = 'c569d85825567929fb063ae32ba1b96b';
    var token_admin_customers = 'f84da40d9f962ef13cf894543564055c';
    var token_admin_customer_threads = 'd1f3228ec9c6f8187298431ce467f35a';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = 'bcefe32574a6a4ef0ace27689adfb891';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/e-commerce/admin020qtadsk/index.php/improve/modules/catalog/recommended?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/e-commerce/modules/appagebuilder/views/css/admin/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/e-commerce/admin020qtadsk/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/e-commerce/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/e-commerce/admin020qtadsk/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/e-commerce/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/e-commerce/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/e-commerce/modules/leofeature/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var appagebuilder_listshortcode_url = \"http:\\/\\/localhost\\/e-commerce\\/admin020qtadsk\\/index.php?controller=AdminApPageBuilderShortcode&token=c43c042abdb334efa082b4c19bfae2cc&get_listshortcode=1\";
var appagebuilder_module_dir = \"\\/e-commerce\\/modules\\/appagebuilder\\/\";
var baseAdminDir = \"\\/e-commerce\\/admin020qtadsk\\/\";
var baseDir = \"\\/e-commerce\\/\";
var currency = {\"iso_code\":\"XOF\",\"sign\":\"CFA\",\"name\":\"franc CFA (BCEAO)\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var leofeature_module_dir = \"\\/e-commerce\\/modules\\/leofeature\\/\";
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/e-commerce/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/e-commerce/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/e-commerce/modules/appagebuilder/views/js/admin/setting.js\"></script>
<script type=\"text/javascript\" src=\"/e-commerce/admin020qtadsk/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/e-commerce/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/e-commerce/js/admin.js?v=1.7.5.2\"></script>
<script type=\"text/javascript\" src=\"/e-commerce/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/e-commerce/js/tools.js?v=1.7.5.2\"></script>
<script type=\"text/javascript\" src=\"/e-commerce/admin020qtadsk/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/e-commerce/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/e-commerce/admin020qtadsk/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/e-commerce/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/e-commerce/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/e-commerce/modules/leofeature/views/js/back.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/e-commerce\\/admin020qtadsk\\/index.php?controller=AdminGamification&token=c2d9fc55b66d045ccd02753e036991fc\";
            var current_id_tab = 103;
        </script>

";
        // line 88
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-fr adminperformance\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminDashboard&amp;token=75b2ea16c4b08f048c6f292b9f773919\"></a>
    <span id=\"shop_version\">1.7.5.2</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminOrders&amp;token=c569d85825567929fb063ae32ba1b96b\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3cb53cac38b8290c3ba8421032f3a5a2\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/e-commerce/admin020qtadsk/index.php/improve/modules/manage?token=58bcfec72029c79c57764aae6853feba\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=a76fba9363b31764fae290e919809516\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/e-commerce/admin020qtadsk/index.php/sell/catalog/products/new?token=58bcfec72029c79c57764aae6853feba\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminCategories&amp;addcategory&amp;token=ce6e1e5aec44aa47e6e85b1cea73d6d2\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"53\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance/?-F1LhTgdIX6QsFRzs\"
        data-post-link=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminQuickAccesses&token=a98d728dee4d8c356e52d018db448cc0\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Performances - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter cette page à l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminQuickAccesses&token=a98d728dee4d8c356e52d018db448cc0\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/e-commerce/admin020qtadsk/index.php?controller=AdminSearch&amp;token=02a6abf2ae97226f15605b1e77642fc8\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/e-commerce/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Voir ma boutique
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté votre taux de conversion dernièrement ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              C'est du temps libéré pour autre chose !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/seyzy120%40gmail.com.jpg\" />
      <span>Seynabou SECK</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminEmployees&amp;id_employee=1&amp;updateemployee=1&amp;token=bcefe32574a6a4ef0ace27689adfb891\">
      <i class=\"material-icons\">settings_applications</i>
      Votre profil
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminLogin&amp;logout=1&amp;token=e170781f3a412c5799f16176d8bccbd1\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminDashboard&amp;token=75b2ea16c4b08f048c6f292b9f773919\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminOrders&amp;token=c569d85825567929fb063ae32ba1b96b\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Commandes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminOrders&amp;token=c569d85825567929fb063ae32ba1b96b\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/sell/orders/invoices/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminSlip&amp;token=3a465c3a388fab7f60e789ee4bafef07\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/sell/orders/delivery-slips/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminCarts&amp;token=9c1c56ec7ab1c24cec44ac95a9e53e57\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/e-commerce/admin020qtadsk/index.php/sell/catalog/products?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalogue
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/sell/catalog/products?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminCategories&amp;token=ce6e1e5aec44aa47e6e85b1cea73d6d2\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminTracking&amp;token=777ab8cd1e30569a57abbdb722a3da05\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminAttributesGroups&amp;token=f66499e0c395a221cca5971c1c65d14d\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminManufacturers&amp;token=443c96aa1b9daac900d9799c0ecde938\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminAttachments&amp;token=0a7f9e8c75807eac0f9b9fda92c732dc\" class=\"link\"> Fichiers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminCartRules&amp;token=a76fba9363b31764fae290e919809516\" class=\"link\"> Réductions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/sell/stocks/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminCustomers&amp;token=f84da40d9f962ef13cf894543564055c\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clients
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminCustomers&amp;token=f84da40d9f962ef13cf894543564055c\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminAddresses&amp;token=cdd26f50cd2edbecf5d02a6a3a7c62e3\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminCustomerThreads&amp;token=d1f3228ec9c6f8187298431ce467f35a\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    SAV
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminCustomerThreads&amp;token=d1f3228ec9c6f8187298431ce467f35a\" class=\"link\"> SAV
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminOrderMessage&amp;token=d5032c65919fc4013b19fa4b2c3de4b6\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminReturn&amp;token=696234536eec35946553190071cfb765\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminStats&amp;token=3cb53cac38b8290c3ba8421032f3a5a2\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statistiques
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminPsMboModule&amp;token=2ccf1df419d345bb840a4ca431243d5d\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminPsMboModule&amp;token=2ccf1df419d345bb840a4ca431243d5d\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/improve/modules/manage?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"153\" id=\"subtab-AdminLeoBootstrapMenuModule\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminLeoBootstrapMenuModule&amp;token=4b8ee9367da2a6c23f0cd24ee053253e\" class=\"link\"> Leo Megamenu Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"156\" id=\"subtab-AdminLeoSlideshowMenuModule\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminLeoSlideshowMenuModule&amp;token=12553298a74d20eb10b258a1106f7135\" class=\"link\"> Leo Slideshow Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"160\" id=\"subtab-AdminLeoProductSearchModule\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminLeoProductSearchModule&amp;token=0386a5a0186bf3ac3095cc34c2c8c1cb\" class=\"link\"> Leo Product Search Configuration
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminThemes&amp;token=8b8b18b1fcf281af755aaf0303f119b0\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Apparence
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminThemes&amp;token=8b8b18b1fcf281af755aaf0303f119b0\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminPsMboTheme&amp;token=7c2101b48259017dbf16d11353c94b4e\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminCmsContent&amp;token=40e3fdcd59332ce79a29a50b3d3acf8f\" class=\"link\"> Pages de contenu (CMS)
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/improve/design/modules/positions/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminImages&amp;token=66c1a1e3ddaf184c21f3bfbe974b42d6\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminLinkWidget&amp;token=eaaf6c9f34f82937a79484f3f939c111\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"58\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminCarriers&amp;token=8e3a0f1df5121fb39f25d2d8f5cfd72c\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Livraison
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminCarriers&amp;token=8e3a0f1df5121fb39f25d2d8f5cfd72c\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminShipping\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/improve/shipping/preferences?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"61\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/e-commerce/admin020qtadsk/index.php/improve/payment/payment_methods?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Paiement
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-61\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminPayment\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/improve/payment/payment_methods?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/improve/payment/preferences?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"64\" id=\"subtab-AdminInternational\">
                  <a href=\"/e-commerce/admin020qtadsk/index.php/improve/international/localization/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-64\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/improve/international/localization/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"70\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminZones&amp;token=2864466dce13aac8dcb4089e873f2a10\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminTaxes&amp;token=5259bb4cac990c7a014ca2651ca49816\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\" id=\"subtab-AdminTranslations\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/improve/international/translations/settings?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"133\" id=\"subtab-AdminApPageBuilder\">
                  <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminApPageBuilderProfiles&amp;token=20a8ffd3b3a36cb361cc78bc5e130c74\" class=\"link\">
                    <i class=\"material-icons mi-tab\">tab</i>
                    <span>
                    Ap PageBuilder
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-133\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"134\" id=\"subtab-AdminApPageBuilderProfiles\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminApPageBuilderProfiles&amp;token=20a8ffd3b3a36cb361cc78bc5e130c74\" class=\"link\"> Ap Profiles Manage
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"135\" id=\"subtab-AdminApPageBuilderPositions\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminApPageBuilderPositions&amp;token=5e28da1c2324dd3666b4dfc776e3b544\" class=\"link\"> Ap Positions Manage
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminApPageBuilderShortcode\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminApPageBuilderShortcode&amp;token=c43c042abdb334efa082b4c19bfae2cc\" class=\"link\"> Ap ShortCode Manage
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"138\" id=\"subtab-AdminApPageBuilderProducts\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminApPageBuilderProducts&amp;token=c413b06aa2b240d95e42892caa20d543\" class=\"link\"> Ap Products List Builder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"139\" id=\"subtab-AdminApPageBuilderDetails\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminApPageBuilderDetails&amp;token=9a0b9871f28b201a4f44cacbbb98ca7a\" class=\"link\"> Ap Products Details Builder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"141\" id=\"subtab-AdminApPageBuilderThemeEditor\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminApPageBuilderThemeEditor&amp;token=bbbfeb6682279c644376d8f34e054ea8\" class=\"link\"> Ap Live Theme Editor
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"142\" id=\"subtab-AdminApPageBuilderModule\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminApPageBuilderModule&amp;token=b53eedd025c09614a291f4ecd5002f50\" class=\"link\"> Ap Module Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"143\" id=\"subtab-AdminApPageBuilderThemeConfiguration\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminApPageBuilderThemeConfiguration&amp;token=d3a2c90b74a7ab6f4e3a737ab6dc5742\" class=\"link\"> Ap Theme Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"152\" id=\"subtab-AdminApPageBuilderHook\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminApPageBuilderHook&amp;token=bdec119e57a8dde145dd7111554f31b7\" class=\"link\"> Ap Hook Control Panel
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-AdminLeoblogManagement\">
                  <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminLeoblogDashboard&amp;token=cc30f273a3009214e236c659e649c186\" class=\"link\">
                    <i class=\"material-icons mi-create\">create</i>
                    <span>
                    Leo Blog Gestion
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"147\" id=\"subtab-AdminLeoblogDashboard\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminLeoblogDashboard&amp;token=cc30f273a3009214e236c659e649c186\" class=\"link\"> Blog Dashboard
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"148\" id=\"subtab-AdminLeoblogCategories\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminLeoblogCategories&amp;token=66db1555b809e06182b7947b21b7bf81\" class=\"link\"> Categories Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"149\" id=\"subtab-AdminLeoblogBlogs\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminLeoblogBlogs&amp;token=c72fa857898ea923a783ebf4d85bf86d\" class=\"link\"> Blogs Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"150\" id=\"subtab-AdminLeoblogComments\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminLeoblogComments&amp;token=0b00b24878db68b667b2d830effc17e3\" class=\"link\"> Comment Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"151\" id=\"subtab-AdminLeoblogModule\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminLeoblogModule&amp;token=b9e0641c7e85b33065ccff8663333c30\" class=\"link\"> Leo Blog Configuration
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"157\" id=\"subtab-AdminLeofeatureManagement\">
                  <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminLeofeatureModule&amp;token=0263553105f4213d6df2f29e47b29946\" class=\"link\">
                    <i class=\"material-icons mi-star\">star</i>
                    <span>
                    Leo Management Feature
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-157\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"158\" id=\"subtab-AdminLeofeatureModule\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminLeofeatureModule&amp;token=0263553105f4213d6df2f29e47b29946\" class=\"link\"> Leo Feature Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"159\" id=\"subtab-AdminLeofeatureReviews\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminLeofeatureReviews&amp;token=ffae24cceda77b07953b6292fdcd1941\" class=\"link\"> Product Review Management
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"78\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"79\" id=\"subtab-ShopParameters\">
                  <a href=\"/e-commerce/admin020qtadsk/index.php/configure/shop/preferences/preferences?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Paramètres de la boutique
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-79\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/configure/shop/preferences/preferences?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Paramètres généraux
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"83\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/configure/shop/order-preferences/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/configure/shop/product-preferences/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"87\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/configure/shop/customer-preferences/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"91\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminContacts&amp;token=9b739d58d07751e5dd9d689517b32d4e\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"94\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/configure/shop/seo-urls/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminSearchConf&amp;token=281ea6d2cab3910c878520a982987205\" class=\"link\"> Rechercher
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminGamification&amp;token=c2d9fc55b66d045ccd02753e036991fc\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"101\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/e-commerce/admin020qtadsk/index.php/configure/advanced/system-information/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Paramètres avancés
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-101\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminInformation\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/configure/advanced/system-information/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"103\" id=\"subtab-AdminPerformance\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/configure/advanced/performance/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/configure/advanced/administration/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminEmails\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/configure/advanced/emails/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminImport\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/configure/advanced/import/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminEmployees&amp;token=bcefe32574a6a4ef0ace27689adfb891\" class=\"link\"> Équipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminRequestSql&amp;token=08f4539b4834215f7db40a346801077d\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"114\" id=\"subtab-AdminLogs\">
                              <a href=\"/e-commerce/admin020qtadsk/index.php/configure/advanced/logs/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"115\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminWebservice&amp;token=d20704ce42bfef40364d77b5bf192c43\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Paramètres avancés</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/e-commerce/admin020qtadsk/index.php/configure/advanced/performance/?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\" aria-current=\"page\">Performances</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performances          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminPsMboModule&token=2ccf1df419d345bb840a4ca431243d5d';
    var controller = 'AdminPerformance';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/e-commerce/admin020qtadsk/index.php/configure/advanced/performance/clear-cache?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\"                  title=\"Vider le cache\"                >
                  <i class=\"material-icons\">delete</i>
                  Vider le cache
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/e-commerce/admin020qtadsk/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminPerformance%253Fversion%253D1.7.5.2%2526country%253Dfr/Aide?_token=gc3Kwb1jgPkyWPCL0v5pPrpblQ-F1LhTgdIX6QsFRzs\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
    
    <div class=\"content-div  \">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1322
        $this->displayBlock('content_header', $context, $blocks);
        // line 1323
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1324
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1325
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1326
        echo "
           
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Modules et services recommandés</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/e-commerce/admin020qtadsk/index.php?controller=AdminDashboard&amp;token=75b2ea16c4b08f048c6f292b9f773919\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=seyzy120%40gmail.com&amp;firstname=Seynabou&amp;lastname=SECK&amp;website=http%3A%2F%2Flocalhost%2Fe-commerce%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/e-commerce/admin020qtadsk/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=seyzy120%40gmail.com&amp;firstname=Seynabou&amp;lastname=SECK&amp;website=http%3A%2F%2Flocalhost%2Fe-commerce%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1449
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 88
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1322
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1323
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1324
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1325
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1449
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__c6ba9ae6466c8eb22a1540b62ca2fd611f065e9a8f41f0084ef3858a8eb23e64";
    }

    public function getDebugInfo()
    {
        return array (  1528 => 1449,  1523 => 1325,  1518 => 1324,  1513 => 1323,  1508 => 1322,  1499 => 88,  1491 => 1449,  1366 => 1326,  1363 => 1325,  1360 => 1324,  1357 => 1323,  1355 => 1322,  117 => 88,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__c6ba9ae6466c8eb22a1540b62ca2fd611f065e9a8f41f0084ef3858a8eb23e64", "");
    }
}
