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

/* home/index.html.twig */
class __TwigTemplate_ca9cd241d21b118038b8a5ade52338e2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'carousel' => [$this, 'block_carousel'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "        <!-- BASICS -->

        <div class =\"basics-container\">
            <h2 class=\"featurette-heading text-center\"> Nos basiques </h2>
            <div class=\"row featurette\">
                <div class=\"col-md-12\">
                    <div class =\"basics-pictures-container\">
                        <a class =\"basics-pictures\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-category_eyes.jpg"), "html", null, true);
        echo "\" alt=\"yeux\" width=\"300\" height=\"300\"> </a>
                        <img class =\"basics-pictures\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-category_lips.jpg"), "html", null, true);
        echo "\" alt=\"levres\" width=\"300\" height=\"300\">
                        <img class =\"basics-pictures\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-category_nails.jpg"), "html", null, true);
        echo "\" alt=\"ongles\" width=\"300\" height=\"300\">
                    </div>
                    <div class=\" category-name-container\">
                    
                        <h5> YEUX  </h5>
                        <h5> LEVRES </h5>
                        <h5> ONGLES </h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- BESTSELLERS -->
     
        <div class=\"container-bestsellers\">
            
            <div class=\"row\">
                <div class=\"title-bestsellers col-md-3 product-item\">
                    <h2 class=\"text-center\"> <span id=\"nos-produits\"> Nos produits </span> <br> <span id=\"bestsellers\"> bestsellers</span></h2>
                </div>

                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 34, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 35
            echo "                    <div class=\"col-md-3\">
                        ";
            // line 36
            $this->loadTemplate("product/single_product.html.twig", "home/index.html.twig", 36)->display($context);
            // line 37
            echo "                    </div>
        
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
        </div> 

        <!-- PRESENTATION -->
        <div class=\"presentation-container\">
            <h2 class=\"featurette-heading text-center presentation-title\"> Qui sommes-nous ?</h2>
            <div class=\"row featurette\">
                
                <div class=\"col-md-7 order-md-2\">
                <h3 class=\"presentation-subtitle\"> Trois basiques, que du naturel  </h3>
                    <p class=\"lead presentation-text\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ligula diam, venenatis vel erat sit amet, iaculis iaculis mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas ante justo, tincidunt nec accumsan eu, pulvinar et massa. Nunc convallis urna a diam sollicitudin pharetra. Morbi a risus vel libero euismod tristique non in nisi. Curabitur ultrices diam arcu, vel bibendum orci aliquam sit amet. Maecenas nec orci posuere, auctor dui id, vehicula libero. Sed tempus felis vel mi tristique mollis. Suspendisse blandit elit enim. Donec et velit sed ante ornare ornare. Nulla lacinia augue eu mauris luctus mattis.</p>
                </div>
                <div class=\"col-md-5 order-md-1\">
                    <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/deco-leafverte.png"), "html", null, true);
        echo "\" alt=\"\" width=\"500\" height=\"500\">
                    <img id = \"deco-gold\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/deco-gold.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"250\" height=\"500\">
                </div>
            </div>
        </div>

        </div>
        
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 54,  182 => 53,  167 => 40,  151 => 37,  149 => 36,  146 => 35,  129 => 34,  106 => 14,  102 => 13,  96 => 12,  87 => 5,  77 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block carousel %}{% endblock carousel %}

{% block content %}
        <!-- BASICS -->

        <div class =\"basics-container\">
            <h2 class=\"featurette-heading text-center\"> Nos basiques </h2>
            <div class=\"row featurette\">
                <div class=\"col-md-12\">
                    <div class =\"basics-pictures-container\">
                        <a class =\"basics-pictures\" href=\"{{path('app_product')}}\"><img src=\"{{asset('assets/img/home-category_eyes.jpg') }}\" alt=\"yeux\" width=\"300\" height=\"300\"> </a>
                        <img class =\"basics-pictures\" src=\"{{asset('assets/img/home-category_lips.jpg') }}\" alt=\"levres\" width=\"300\" height=\"300\">
                        <img class =\"basics-pictures\" src=\"{{asset('assets/img/home-category_nails.jpg') }}\" alt=\"ongles\" width=\"300\" height=\"300\">
                    </div>
                    <div class=\" category-name-container\">
                    
                        <h5> YEUX  </h5>
                        <h5> LEVRES </h5>
                        <h5> ONGLES </h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- BESTSELLERS -->
     
        <div class=\"container-bestsellers\">
            
            <div class=\"row\">
                <div class=\"title-bestsellers col-md-3 product-item\">
                    <h2 class=\"text-center\"> <span id=\"nos-produits\"> Nos produits </span> <br> <span id=\"bestsellers\"> bestsellers</span></h2>
                </div>

                {% for product in products %}
                    <div class=\"col-md-3\">
                        {% include \"product/single_product.html.twig\" %}
                    </div>
        
                {% endfor %}
            </div>
        </div> 

        <!-- PRESENTATION -->
        <div class=\"presentation-container\">
            <h2 class=\"featurette-heading text-center presentation-title\"> Qui sommes-nous ?</h2>
            <div class=\"row featurette\">
                
                <div class=\"col-md-7 order-md-2\">
                <h3 class=\"presentation-subtitle\"> Trois basiques, que du naturel  </h3>
                    <p class=\"lead presentation-text\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ligula diam, venenatis vel erat sit amet, iaculis iaculis mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas ante justo, tincidunt nec accumsan eu, pulvinar et massa. Nunc convallis urna a diam sollicitudin pharetra. Morbi a risus vel libero euismod tristique non in nisi. Curabitur ultrices diam arcu, vel bibendum orci aliquam sit amet. Maecenas nec orci posuere, auctor dui id, vehicula libero. Sed tempus felis vel mi tristique mollis. Suspendisse blandit elit enim. Donec et velit sed ante ornare ornare. Nulla lacinia augue eu mauris luctus mattis.</p>
                </div>
                <div class=\"col-md-5 order-md-1\">
                    <img src=\"{{asset('assets/img/deco-leafverte.png') }}\" alt=\"\" width=\"500\" height=\"500\">
                    <img id = \"deco-gold\" src=\"{{asset('assets/img/deco-gold.jpg') }}\" alt=\"\" width=\"250\" height=\"500\">
                </div>
            </div>
        </div>

        </div>
        
{% endblock content %}




", "home/index.html.twig", "C:\\xampp\\htdocs\\symfony\\mcmc\\templates\\home\\index.html.twig");
    }
}
