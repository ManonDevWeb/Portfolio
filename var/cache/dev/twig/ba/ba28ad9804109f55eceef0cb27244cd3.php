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
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Mon panier</h1>
    Retrouvez l'ensemble des produits que vous avez ajoutés au panier.
    ";
        // line 9
        echo "
    ";
        // line 11
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 11, $this->source); })())) > 0)) {
            // line 12
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
            // line 24
            $context["total"] = null;
            // line 25
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                // line 26
                echo "                    <tr>
                        <th>
                            <img src=\"uploads/";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 28), "illustration", [], "any", false, false, false, 28), "html", null, true);
                echo "\" height=\"75px\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
                echo "\">
                        </th>
                        <td>
                            ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
                echo "<br>
                            <small>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 32), "subtitle", [], "any", false, false, false, 32), "html", null, true);
                echo "</small>
                        </td>
                        <td>
                            <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decrease_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/minus.png"), "html", null, true);
                echo "\" height=\"12px\" alt=\"Retirer une quantité à mon produit\">
                            </a>
                            ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 38), "html", null, true);
                echo "
                            <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/plus.png"), "html", null, true);
                echo "\" height=\"12px\" alt=\"Ajouter un produit\">
                            </a>

                        </td>
                        <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 44), "price", [], "any", false, false, false, 44) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                        <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 45), "price", [], "any", false, false, false, 45) * twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 45)) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                        <td>
                            <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_from_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bin.png"), "html", null, true);
                echo "\" height=\"18px\" alt=\"Supprimer mon produit\">
                            </a>
                        </td>
                    </tr>
                    ";
                // line 52
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 52, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 52), "price", [], "any", false, false, false, 52) * twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 52)));
                // line 53
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            </tbody>
            
        </table>
        <div class=\"text-right mb-5\">
            <b>Nombre d'articles : </b>";
            // line 58
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 58, $this->source); })())), "html", null, true);
            echo "<br>
            <b>Total de mon panier : </b>";
            // line 59
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 59, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
            echo " €<br>
            <a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
            echo "\" class=\"btn btn-success mt-3\">Valider mon panier</a>
        </div>
        ";
        } else {
            // line 63
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
        return array (  214 => 63,  208 => 60,  204 => 59,  200 => 58,  194 => 54,  188 => 53,  186 => 52,  179 => 48,  175 => 47,  170 => 45,  166 => 44,  159 => 40,  155 => 39,  151 => 38,  146 => 36,  142 => 35,  136 => 32,  132 => 31,  124 => 28,  120 => 26,  115 => 25,  113 => 24,  99 => 12,  96 => 11,  93 => 9,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}}Mon panier{% endblock %}

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
