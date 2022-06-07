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

/* cart/index.html.twig */
class __TwigTemplate_b28df4ac0d5f6fd1ab4f41d18ceeac20 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Mon panier";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        // line 6
        echo "    <br><br>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <h1>Mon panier</h1>
    Retrouvez l'ensemble des produits que vous avez ajoutés au panier.
    ";
        // line 14
        echo "
    ";
        // line 16
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 16, $this->source); })())) > 0)) {
            // line 17
            echo "        <table class=\"table mt-3\">
            <thead>
                <tr>
                    <th scope=\"col\">Produit</th>
                    <th scope=\"col\"></th>
                    <th scope=\"col\">Quantité</th>
                    <th scope=\"col\">Prix</th>
                    <th scope=\"col\">Total</th>
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 29
            $context["total"] = null;
            // line 30
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                // line 31
                echo "                    <tr>
                        <th>
                            <img src=\"uploads/";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 33), "illustration", [], "any", false, false, false, 33), "html", null, true);
                echo "\" height=\"75px\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
                echo "\">
                        </th>
                        <td>
                            ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
                echo "<br>
                            <small>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 37), "subtitle", [], "any", false, false, false, 37), "html", null, true);
                echo "</small>
                        </td>
                        <td>
                            <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decrease_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/minus.png"), "html", null, true);
                echo "\" height=\"12px\" alt=\"Retirer une quantité à mon produit\">
                            </a>
                            ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 43), "html", null, true);
                echo "
                            <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/plus.png"), "html", null, true);
                echo "\" height=\"12px\" alt=\"Ajouter un produit\">
                            </a>

                        </td>
                        <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 49), "price", [], "any", false, false, false, 49) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                        <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 50), "price", [], "any", false, false, false, 50) * twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 50)) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                        <td>
                            <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_from_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bin.png"), "html", null, true);
                echo "\" height=\"18px\" alt=\"Supprimer mon produit\">
                            </a>
                        </td>
                    </tr>
                    ";
                // line 57
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 57, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 57), "price", [], "any", false, false, false, 57) * twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 57)));
                // line 58
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "            </tbody>
            
        </table>
        <div class=\"text-right mb-5\">
            <b>Nombre d'articles : </b>";
            // line 63
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 63, $this->source); })())), "html", null, true);
            echo "<br>
            <b>Total de mon panier : </b>";
            // line 64
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 64, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
            echo " €<br>
            <a href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
            echo "\" class=\"btn btn-success mt-3\">Valider mon panier</a>
        </div>
        ";
        } else {
            // line 68
            echo "            <hr>
            <p><b>Votre panier est vide.</b></p>
        ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 68,  230 => 65,  226 => 64,  222 => 63,  216 => 59,  210 => 58,  208 => 57,  201 => 53,  197 => 52,  192 => 50,  188 => 49,  181 => 45,  177 => 44,  173 => 43,  168 => 41,  164 => 40,  158 => 37,  154 => 36,  146 => 33,  142 => 31,  137 => 30,  135 => 29,  121 => 17,  118 => 16,  115 => 14,  111 => 11,  101 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}}Mon panier{% endblock %}

{% block carousel %}
    <br><br>
{% endblock %}


{% block content %}
    <h1>Mon panier</h1>
    Retrouvez l'ensemble des produits que vous avez ajoutés au panier.
    {# {{ dump(cart) }} #}

    {# Si le panier est vide, on n'affiche pas le tableau mais un texte disant que le panier est vide #}
    {% if cart|length > 0 %}
        <table class=\"table mt-3\">
            <thead>
                <tr>
                    <th scope=\"col\">Produit</th>
                    <th scope=\"col\"></th>
                    <th scope=\"col\">Quantité</th>
                    <th scope=\"col\">Prix</th>
                    <th scope=\"col\">Total</th>
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                {% set total = null %}
                {% for prod in cart %}
                    <tr>
                        <th>
                            <img src=\"uploads/{{ prod.product.illustration }}\" height=\"75px\" alt=\"{{ prod.product.name }}\">
                        </th>
                        <td>
                            {{ prod.product.name }}<br>
                            <small>{{ prod.product.subtitle }}</small>
                        </td>
                        <td>
                            <a href=\"{{ path('app_decrease_to_cart', {'id' : prod.product.id}) }}\">
                                <img src=\"{{ asset('assets/images/minus.png') }}\" height=\"12px\" alt=\"Retirer une quantité à mon produit\">
                            </a>
                            {{ prod.quantity }}
                            <a href=\"{{ path('app_add_to_cart', {'id' : prod.product.id}) }}\">
                                <img src=\"{{ asset('assets/images/plus.png') }}\" height=\"12px\" alt=\"Ajouter un produit\">
                            </a>

                        </td>
                        <td>{{ (prod.product.price /100)|number_format(2,',','.') }} €</td>
                        <td>{{ ((prod.product.price * prod.quantity) /100)|number_format(2,',','.') }} €</td>
                        <td>
                            <a href=\"{{ path('app_delete_from_cart', {'id' : prod.product.id}) }}\">
                                <img src=\"{{ asset('assets/images/bin.png') }}\" height=\"18px\" alt=\"Supprimer mon produit\">
                            </a>
                        </td>
                    </tr>
                    {% set total = total + (prod.product.price * prod.quantity) %}
                {% endfor %}
            </tbody>
            
        </table>
        <div class=\"text-right mb-5\">
            <b>Nombre d'articles : </b>{{ cart|length }}<br>
            <b>Total de mon panier : </b>{{ (total /100)|number_format(2,',','.') }} €<br>
            <a href=\"{{ path('app_order') }}\" class=\"btn btn-success mt-3\">Valider mon panier</a>
        </div>
        {% else %}
            <hr>
            <p><b>Votre panier est vide.</b></p>
        {% endif %}
{% endblock %}
", "cart/index.html.twig", "C:\\xampp\\htdocs\\mcmc\\templates\\cart\\index.html.twig");
    }
}
