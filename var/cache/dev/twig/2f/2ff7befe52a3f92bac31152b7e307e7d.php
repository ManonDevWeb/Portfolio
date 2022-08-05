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
            'javascript' => [$this, 'block_javascript'],
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
    <meta name=\"description\" content=\"Boutique de maquillage\">
    <meta name=\"author\" content=\"C&amp;M, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Fontawesome library CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome-free-5.14.0-web/css/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
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
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <a class=\"navbar-brand\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">MCMC</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav mr-auto\">
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
            </ul>
            ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62)) {
            // line 63
            echo "                ";
            // line 64
            echo "                    <a class=\"nav-link\" aria-current=\"page\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\">Mon compte <small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "firstname", [], "any", false, false, false, 64), "html", null, true);
            echo ")</small></a> | <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                ";
            // line 66
            echo "            ";
        } else {
            // line 67
            echo "                ";
            // line 68
            echo "                    <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a> | <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
                ";
            // line 70
            echo "            ";
        }
        // line 71
        echo "
            <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        echo "\">
                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/shopping-cart.png"), "html", null, true);
        echo "\" class=\"cart-icon\" alt=\"Mon panier\">
            </a>

            <form class=\"form-inline mt-2 mt-md-0\">
                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Rechercher\" aria-label=\"Search\">
                <button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\">🔍</button>
            </form>
            
        </div>
    </nav>
</header>

<main role=\"main\">
    ";
        // line 86
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 87
            echo "    ";
            // line 88
            echo "    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 90, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 91
                echo "                <li data-target=\"#myCarousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (($context["key"] == 0)) {
                    echo "class=\"active\"";
                }
                echo "></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "        </ol>
        <div class=\"carousel-inner\">
            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 95, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 96
                echo "            <div class=\"carousel-item ";
                if (($context["key"] == 0)) {
                    echo "active";
                }
                echo "\" style=\"background: url('/uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "illustration", [], "any", false, false, false, 96), "html", null, true);
                echo "'); background-size: cover; background-position: center\">
                <div class=\"container\">
                    <div class=\"carousel-caption text-left\">
                        <h1>";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "title", [], "any", false, false, false, 99), "html", null, true);
                echo "</h1>
                        <p>";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 100), "html", null, true);
                echo "</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnUrl", [], "any", false, false, false, 101), "html", null, true);
                echo "\" role=\"button\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnTitle", [], "any", false, false, false, 101), "html", null, true);
                echo "</a></p>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "        </div>
        <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
    ";
            // line 117
            echo "    ";
        }
        // line 118
        echo "
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing\">

        ";
        // line 125
        $this->displayBlock('content', $context, $blocks);
        // line 127
        echo "
    </div><!-- /.container -->

    <!-- FOOTER -->
    <footer class=\"footer-custom\">
        <p class=\"float-right\"><a class=\"top-xl\" href=\"#\">&#x1F51D;</a></p>
        <p>&copy; 2022 MCMC &middot; <small><a href=\"#\">Politique de confidentialité</a> &middot; <a href=\"#\">Mentions légales</a> &middot; <a href=\"#\">Cookies</a></small></p>
    </footer>
</main>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"";
        // line 137
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

        echo "MCMC | ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

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

    // line 125
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 126
        echo "        ";
        
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
        return array (  354 => 126,  344 => 125,  334 => 22,  324 => 21,  305 => 10,  292 => 137,  280 => 127,  278 => 125,  269 => 118,  266 => 117,  254 => 106,  241 => 101,  237 => 100,  233 => 99,  222 => 96,  218 => 95,  214 => 93,  201 => 91,  197 => 90,  193 => 88,  191 => 87,  189 => 86,  173 => 73,  169 => 72,  166 => 71,  163 => 70,  156 => 68,  154 => 67,  151 => 66,  142 => 64,  140 => 63,  138 => 62,  132 => 59,  123 => 53,  113 => 46,  105 => 41,  85 => 23,  83 => 21,  78 => 19,  73 => 17,  68 => 15,  63 => 13,  57 => 10,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Boutique de maquillage\">
    <meta name=\"author\" content=\"C&amp;M, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">

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
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <a class=\"navbar-brand\" href=\"{{path('home')}}\">MCMC</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{path('app_product')}}\">Nos produits <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"\">Qui sommes-nous ? </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_contact') }}\">Contact </a>
                </li>
            </ul>
            {% if app.user %}
                {# <li class=\"nav-item\"> #}
                    <a class=\"nav-link\" aria-current=\"page\" href=\"{{path('app_account')}}\">Mon compte <small>({{app.user.firstname}})</small></a> | <a class=\"nav-link\" href=\"{{path('app_logout')}}\">Déconnexion</a>
                {# </li> #}
            {% else %}
                {# <li class=\"nav-item\"> #}
                    <a class=\"nav-link\" href=\"{{path('app_login')}}\">Connexion</a> | <a class=\"nav-link\" href=\"{{path('app_register')}}\">Inscription</a>
                {# </li> #}
            {% endif %}

            <a href=\"{{ path('app_cart') }}\">
                <img src=\"{{ asset('assets/images/shopping-cart.png') }}\" class=\"cart-icon\" alt=\"Mon panier\">
            </a>

            <form class=\"form-inline mt-2 mt-md-0\">
                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Rechercher\" aria-label=\"Search\">
                <button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\">🔍</button>
            </form>
            
        </div>
    </nav>
</header>

<main role=\"main\">
    {% if block('carousel') is defined %}
    {# {% block carousel %} #}
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            {% for key,header in headers %}
                <li data-target=\"#myCarousel\" data-slide-to=\"{{ key }}\" {% if key ==0 %}class=\"active\"{% endif %}></li>
            {% endfor %}
        </ol>
        <div class=\"carousel-inner\">
            {% for key,header in headers %}
            <div class=\"carousel-item {% if key ==0 %}active{% endif %}\" style=\"background: url('/uploads/{{ header.illustration }}'); background-size: cover; background-position: center\">
                <div class=\"container\">
                    <div class=\"carousel-caption text-left\">
                        <h1>{{header.title}}</h1>
                        <p>{{header.content}}</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"{{ header.btnUrl }}\" role=\"button\">{{header.btnTitle}}</a></p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
        <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
    {# {% endblock carousel %}  #}
    {% endif %}

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing\">

        {% block content %}
        {% endblock content %}

    </div><!-- /.container -->

    <!-- FOOTER -->
    <footer class=\"footer-custom\">
        <p class=\"float-right\"><a class=\"top-xl\" href=\"#\">&#x1F51D;</a></p>
        <p>&copy; 2022 MCMC &middot; <small><a href=\"#\">Politique de confidentialité</a> &middot; <a href=\"#\">Mentions légales</a> &middot; <a href=\"#\">Cookies</a></small></p>
    </footer>
</main>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"{{ asset('assets/js/bootstrap.bundle.js') }}\"></script>
</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\mcmc\\templates\\base.html.twig");
    }
}
