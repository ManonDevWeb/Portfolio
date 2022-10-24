<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_b65dcd4beb3b8a8b94e9db682d1a5e31 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
<<<<<<< HEAD
        // line 13
=======
        // line 12
>>>>>>> main
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Fontawesome library CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome-free-5.14.0-web/css/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
<<<<<<< HEAD
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/mcmc.css"), "html", null, true);
        echo "\">
    <!-- Favicon -->
    <link rel=\"icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.svg"), "html", null, true);
        echo "\">

    ";
        // line 21
        $this->displayBlock('javascript', $context, $blocks);
        // line 23
        echo "
=======
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/MCMC.css"), "html", null, true);
        echo "\">

    ";
        // line 16
        echo "    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Barlow:ital,wght@1,600&family=Fraunces:ital,opsz,wght@0,9..144,900;1,9..144,700&display=swap\" rel=\"stylesheet\">

>>>>>>> main
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href=\"";
<<<<<<< HEAD
        // line 41
=======
        // line 37
>>>>>>> main
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-white\">

        <a class=\"navbar-brand\" href=\"";
<<<<<<< HEAD
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">MCMC</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
=======
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logoMCMC.svg"), "html", null, true);
        echo "\" width =\"80\" height =\"39\" alt=\"logo MCMC\"></a>
        <button class=\"navbar-toggler bg-dark\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
>>>>>>> main
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav mr-auto\">
<<<<<<< HEAD
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product");
        echo "\">Nos produits <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"\">Qui sommes-nous ? </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact </a>
                </li>
                ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61)) {
            // line 62
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "roles", [], "any", false, false, false, 62), 0, [], "array", false, false, false, 62) == "ROLE_ADMIN")) {
                // line 63
                echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
                // line 64
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Administration</a>
                        </li>
                    ";
            }
            // line 67
            echo "                ";
        }
        // line 68
        echo "            </ul>
            ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69)) {
            // line 70
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "roles", [], "any", false, false, false, 70), 0, [], "array", false, false, false, 70) == "ROLE_ADMIN")) {
                // line 71
                echo "                        <a class=\"nav-link\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Administration </a> |
                ";
            }
            // line 73
            echo "                <a class=\"nav-link\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\">Mon compte <small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "firstname", [], "any", false, false, false, 73), "html", null, true);
            echo ")</small></a> | <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
            ";
        } else {
            // line 75
            echo "                <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a> | <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
            ";
        }
        // line 77
        echo "
            <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        echo "\">
                <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/shopping-cart.png"), "html", null, true);
        echo "\" class=\"cart-icon\" alt=\"Mon panier\">
            </a>
=======
>>>>>>> main

                <li class=\"nav-item active\">
                    <a class=\"nav-link text-dark\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product");
        echo "\">Yeux<span class=\"sr-only\">(current)</span></a>
                </li>

                <li class=\"nav-item active\">
                    <a class=\"nav-link text-dark\" href=\"#\">Lèvres <span class=\"sr-only\">(current)</span></a>
                </li>

                <li class=\"nav-item active \">
                    <a class=\"nav-link text-dark\" href=\"#\"> Ongles <span class=\"sr-only\">(current)</span></a>
                </li>

            
            </ul>
            <div class=\"navbar-item-custom\">
            ";
        // line 68
        echo "                
         ";
        // line 70
        echo "         ";
        // line 71
        echo "            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/account.svg"), "html", null, true);
        echo "\" width =\"30\" height =\"30\" alt=\"Compte\" class =\"mr-4\" ></a>
            <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/cart.svg"), "html", null, true);
        echo "\" width =\"30\" height =\"30\" alt=\"Panier\"></a>
            </div> 

            <form class=\"d-flex\" role=\"search\">
            <input class=\"form-control me-2 ml-4\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-secondary ml-2\" type=\"submit\"> 
                <svg width =\"20\" height =\"20\" xmlns=\"http://www.w3.org/2000/svg\"  viewBox=\"0 0 512 512\"><path d=\"M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z\"/></svg>
                </button>
            </form>

        ";
        // line 85
        echo "        </div>
    </nav>
</header>

<main role=\"main\">
<<<<<<< HEAD
    ";
        // line 92
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 93
            echo "    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 95, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 96
                echo "                <li data-target=\"#myCarousel\" data-slide-to=\"";
=======

";
        // line 91
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 92
            echo "     
        
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
        ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 96, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                echo " 
            <li data-target=\"#myCarousel\" data-slide-to=\"";
                // line 97
>>>>>>> main
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (($context["key"] == 0)) {
                    echo " class=\"active ";
                }
                echo "\" ></li> 
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
            // line 98
            echo "        </ol>
        <div class=\"carousel-inner\">
            ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 100, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 101
                echo "            <div class=\"carousel-item ";
=======
            // line 99
            echo "        </ol>
        <div class=\"carousel-inner\">
            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 101, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 102
                echo "                
                <div class=\"carousel-item ";
                // line 103
>>>>>>> main
                if (($context["key"] == 0)) {
                    echo " active";
                }
<<<<<<< HEAD
                echo "\" style=\"background: url('/uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "illustration", [], "any", false, false, false, 101), "html", null, true);
                echo "'); background-size: cover; background-position: center\">
                <div class=\"container\">
                    <div class=\"carousel-caption text-left\">
                        <h1>";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "title", [], "any", false, false, false, 104), "html", null, true);
                echo "</h1>
                        <p>";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 105), "html", null, true);
                echo "</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnUrl", [], "any", false, false, false, 106), "html", null, true);
                echo "\" role=\"button\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnTitle", [], "any", false, false, false, 106), "html", null, true);
                echo "</a></p>
                    </div>
=======
                echo "\" style=\"background: url('assets/images/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "illustration", [], "any", false, false, false, 103), "html", null, true);
                echo "'); background-size:cover;\"> 
                    <div class=\"container\">
                        ";
                // line 110
                echo "                    </div>
>>>>>>> main
                </div>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
            // line 111
=======
            // line 114
>>>>>>> main
            echo "        </div>

        <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\" >
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\" ></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
<<<<<<< HEAD
    ";
        }
        // line 122
        echo "
    <!-- Marketing messaging and featurettes
=======

";
        }
        // line 127
        echo "    <!-- Marketing messaging and featurettes
>>>>>>> main
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing ";
        // line 131
        if ( !        $this->hasBlock("carousel", $context, $blocks)) {
            echo "mt-5";
        }
        echo "\">

<<<<<<< HEAD
        ";
        // line 129
        $this->displayBlock('content', $context, $blocks);
        // line 131
        echo "
=======

";
        // line 134
        $this->displayBlock('content', $context, $blocks);
        // line 136
        echo "        
>>>>>>> main
    </div><!-- /.container -->

    <!-- FOOTER -->
    <footer class=\"footer-custom\">

        <div class=\"container-pictures-total\">
            <div class=\"container-pictures\">
                <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/delivery.svg"), "html", null, true);
        echo "\" width =\"70\" height =\"70\" alt=\"livraison\" class=\"img-truck\">
                <small>Livraison offerte </small> <br>
                <small>dès 50€ d'achat</small>
            </div>

            <div class=\"container-pictures\">
                <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/lock.svg"), "html", null, true);
        echo "\" width =\"60\" height =\"60\" alt=\"livraison\" class=\"img-lock\">
                <small>Paiement sécurisé</small>
            </div>

            <div class=\"container-pictures\">
                <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/faq.svg"), "html", null, true);
        echo "\" width =\"60\" height =\"60\" alt=\"livraison\" class=\"img-lock\">
                <small>Des questions?</small> <br>
                <small> Consultez la FAQ</small>
            </div>
            <div class=\"container-pictures\">
                <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/contact.svg"), "html", null, true);
        echo "\" width =\"60\" height =\"60\" alt=\"livraison\" class=\"img-lock\">
                <small>Contactez nous</small>
            </div>
        </div>

        <div class=\"social-network\">
            <p class=\"social-text\"> Suivez-nous : </p>
            <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/instagram.svg"), "html", null, true);
        echo "\" width =\"40\" height =\"40\" alt=\"Instagram\"> 
            <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tiktok.svg"), "html", null, true);
        echo "\" width =\"40\" height =\"40\" alt=\"Tik-Tok\"> 
            <img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/facebook.svg"), "html", null, true);
        echo "\" width =\"40\" height =\"40\" alt=\"Facebook\"> 
        </div>

        <div class=\"footer-legal\">
            <p><a href=\"\"> Mentions légales / CGV </a></p>
            <p><a href=\"\"> Politique de confidentialité</a></p>
            <p><a href=\"\"> Information cookies</a></p>
        </div>

    </footer>
    
</main>
<script src=\"";
<<<<<<< HEAD
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.5.1.slim.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 141
=======
        // line 182
>>>>>>> main
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MCMC";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

<<<<<<< HEAD
    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 22
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 129
=======
    // line 134
>>>>>>> main
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

<<<<<<< HEAD
        // line 130
        echo "        ";
=======
>>>>>>> main
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  373 => 130,  363 => 129,  353 => 22,  343 => 21,  324 => 10,  311 => 141,  307 => 140,  296 => 131,  294 => 129,  285 => 122,  272 => 111,  259 => 106,  255 => 105,  251 => 104,  240 => 101,  236 => 100,  232 => 98,  219 => 96,  215 => 95,  211 => 93,  209 => 92,  193 => 79,  189 => 78,  186 => 77,  178 => 75,  168 => 73,  162 => 71,  159 => 70,  157 => 69,  154 => 68,  151 => 67,  145 => 64,  142 => 63,  139 => 62,  137 => 61,  132 => 59,  123 => 53,  113 => 46,  105 => 41,  85 => 23,  83 => 21,  78 => 19,  73 => 17,  68 => 15,  63 => 13,  57 => 10,  46 => 1,);
=======
        return array (  354 => 134,  335 => 9,  322 => 182,  306 => 169,  302 => 168,  298 => 167,  288 => 160,  280 => 155,  272 => 150,  263 => 144,  253 => 136,  251 => 134,  243 => 131,  237 => 127,  222 => 114,  213 => 110,  204 => 103,  201 => 102,  197 => 101,  193 => 99,  181 => 97,  175 => 96,  169 => 92,  167 => 91,  159 => 85,  144 => 72,  137 => 71,  135 => 70,  132 => 68,  115 => 51,  102 => 43,  93 => 37,  70 => 16,  65 => 13,  61 => 12,  55 => 9,  45 => 1,);
>>>>>>> main
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
<<<<<<< HEAD

    <title>{% block title %}MCMC | {% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Fontawesome library CSS -->
    <link href=\"{{ asset('assets/css/fontawesome-free-5.14.0-web/css/all.css') }}\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/mcmc.css') }}\">
    <!-- Favicon -->
    <link rel=\"icon\" href=\"{{ asset('assets/images/favicon.svg') }}\">

    {% block javascript %}
    {% endblock %}
=======
    <title>{% block title %}MCMC{% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/MCMC.css')}}\">

    {# Importation police texte #}
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Barlow:ital,wght@1,600&family=Fraunces:ital,opsz,wght@0,9..144,900;1,9..144,700&display=swap\" rel=\"stylesheet\">
>>>>>>> main

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href=\"{{ asset('assets/css/carousel.css') }}\" rel=\"stylesheet\">
</head>
<body>
<header>
<<<<<<< HEAD
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <a class=\"navbar-brand\" href=\"{{path('app_home')}}\">MCMC</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
=======
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-white\">

        <a class=\"navbar-brand\" href=\"{{path('app_home')}}\"><img src=\"{{ asset('assets/img/logoMCMC.svg') }}\" width =\"80\" height =\"39\" alt=\"logo MCMC\"></a>
        <button class=\"navbar-toggler bg-dark\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
>>>>>>> main
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav mr-auto\">

                <li class=\"nav-item active\">
                    <a class=\"nav-link text-dark\" href=\"{{path('app_product')}}\">Yeux<span class=\"sr-only\">(current)</span></a>
                </li>
<<<<<<< HEAD
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"\">Qui sommes-nous ? </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_contact') }}\">Contact </a>
                </li>
                {% if app.user %}
                    {% if app.user.roles[0] == \"ROLE_ADMIN\" %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{path('admin')}}\">Administration</a>
                        </li>
                    {% endif %}
                {% endif %}
            </ul>
            {% if app.user %}
                {% if app.user.roles[0] == \"ROLE_ADMIN\" %}
                        <a class=\"nav-link\" href=\"{{path('admin')}}\">Administration </a> |
                {% endif %}
                <a class=\"nav-link\" aria-current=\"page\" href=\"{{path('app_account')}}\">Mon compte <small>({{app.user.firstname}})</small></a> | <a class=\"nav-link\" href=\"{{path('app_logout')}}\">Déconnexion</a>
            {% else %}
                <a class=\"nav-link\" href=\"{{path('app_login')}}\">Connexion</a> | <a class=\"nav-link\" href=\"{{path('app_register')}}\">Inscription</a>
            {% endif %}
=======
>>>>>>> main

                <li class=\"nav-item active\">
                    <a class=\"nav-link text-dark\" href=\"#\">Lèvres <span class=\"sr-only\">(current)</span></a>
                </li>

                <li class=\"nav-item active \">
                    <a class=\"nav-link text-dark\" href=\"#\"> Ongles <span class=\"sr-only\">(current)</span></a>
                </li>

            
            </ul>
            <div class=\"navbar-item-custom\">
            {# {% if app.user %}
            <a href=\"{{path('app_account')}}\">Mon compte <small>({{app.user.firstname}})</small></a> | <a href=\"{{path('app_logout')}}\">Déconnexion</a>
            {% else %} #}
                
         {# <a href=\"{{path('app_login')}}\"></a> | <a href=\"{{path('register')}}\">Inscription</a> #}
         {# {% endif %} #}
            <a href=\"{{path('app_register')}}\"><img src=\"{{ asset('assets/img/account.svg') }}\" width =\"30\" height =\"30\" alt=\"Compte\" class =\"mr-4\" ></a>
            <a href=\"{{path('app_cart')}}\"><img src=\"{{ asset('assets/img/cart.svg') }}\" width =\"30\" height =\"30\" alt=\"Panier\"></a>
            </div> 

            <form class=\"d-flex\" role=\"search\">
            <input class=\"form-control me-2 ml-4\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-secondary ml-2\" type=\"submit\"> 
                <svg width =\"20\" height =\"20\" xmlns=\"http://www.w3.org/2000/svg\"  viewBox=\"0 0 512 512\"><path d=\"M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z\"/></svg>
                </button>
            </form>

        {# <a href=\"{{ path('app_cart')}}\">
            <img src=\"{{asset('assets/img/shopping-cart.png')}}\" class=\"cart-icon\" alt=\"Mon panier\">
        </a> #}
        </div>
    </nav>
</header>

<main role=\"main\">
<<<<<<< HEAD
    {% if block('carousel') is defined %}
=======

{% if block('carousel') is defined %}
     
        
>>>>>>> main
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
        {% for key,header in headers %} 
            <li data-target=\"#myCarousel\" data-slide-to=\"{{key}}\" {% if key == 0 %} class=\"active {% endif %}\" ></li> 
        {% endfor %}
        </ol>
        <div class=\"carousel-inner\">
            {% for key,header in headers %}
                
                <div class=\"carousel-item {% if key == 0 %} active{% endif %}\" style=\"background: url('assets/images/{{ header.illustration }}'); background-size:cover;\"> 
                    <div class=\"container\">
                        {# <div class=\"carousel-caption text-left\">
                            <h1 style=\"color:#000\">{{header.title}}</h1>
                            <p style=\"color:#000\">{{header.content}}</p>
                            <p><a class=\"btn btn-lg btn-primary\" href=\"{{header.btnUrl}}\" role=\"button\">{{header.btnTitle}}</a></p>
                        </div> #}
                    </div>
                </div>

            {% endfor %}
        </div>

        <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\" >
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\" ></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
<<<<<<< HEAD
    {% endif %}
=======
>>>>>>> main

{% endif %}
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing {% if block('carousel') is not defined %}mt-5{% endif %}\">


{% block content %}
{% endblock %}
        
    </div><!-- /.container -->

    <!-- FOOTER -->
    <footer class=\"footer-custom\">

        <div class=\"container-pictures-total\">
            <div class=\"container-pictures\">
                <img src=\"{{asset(\"assets/img/delivery.svg\")}}\" width =\"70\" height =\"70\" alt=\"livraison\" class=\"img-truck\">
                <small>Livraison offerte </small> <br>
                <small>dès 50€ d'achat</small>
            </div>

            <div class=\"container-pictures\">
                <img src=\"{{asset(\"assets/img/lock.svg\")}}\" width =\"60\" height =\"60\" alt=\"livraison\" class=\"img-lock\">
                <small>Paiement sécurisé</small>
            </div>

            <div class=\"container-pictures\">
                <img src=\"{{asset(\"assets/img/faq.svg\")}}\" width =\"60\" height =\"60\" alt=\"livraison\" class=\"img-lock\">
                <small>Des questions?</small> <br>
                <small> Consultez la FAQ</small>
            </div>
            <div class=\"container-pictures\">
                <img src=\"{{asset(\"assets/img/contact.svg\")}}\" width =\"60\" height =\"60\" alt=\"livraison\" class=\"img-lock\">
                <small>Contactez nous</small>
            </div>
        </div>

        <div class=\"social-network\">
            <p class=\"social-text\"> Suivez-nous : </p>
            <img src=\"{{asset(\"assets/img/instagram.svg\")}}\" width =\"40\" height =\"40\" alt=\"Instagram\"> 
            <img src=\"{{asset(\"assets/img/tiktok.svg\")}}\" width =\"40\" height =\"40\" alt=\"Tik-Tok\"> 
            <img src=\"{{asset(\"assets/img/facebook.svg\")}}\" width =\"40\" height =\"40\" alt=\"Facebook\"> 
        </div>

        <div class=\"footer-legal\">
            <p><a href=\"\"> Mentions légales / CGV </a></p>
            <p><a href=\"\"> Politique de confidentialité</a></p>
            <p><a href=\"\"> Information cookies</a></p>
        </div>

    </footer>
    
</main>
<<<<<<< HEAD
<script src=\"{{ asset('assets/js/jquery-3.5.1.slim.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/bootstrap.bundle.js') }}\"></script>
=======
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"{{asset(\"assets/js/bootstrap.bundle.js\")}}\"></script>
>>>>>>> main
</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\mcmc\\templates\\base.html.twig");
    }
}