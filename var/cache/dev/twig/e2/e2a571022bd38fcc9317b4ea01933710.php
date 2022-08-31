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

/* account/order_show.html.twig */
class __TwigTemplate_b2190f2db00c1cfb10190556aa203eec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order_show.html.twig", 1);
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
        echo "Ma commande";
        
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
        echo "
    <h1 class=\"mt-5\">Ma commande ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 7, $this->source); })()), "reference", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
    Bienvenue, ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "firstname", [], "any", false, false, false, 8), "html", null, true);
        echo ".
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_order");
        echo "\">Retour</a>
    <hr><strong></strong>
    <strong>Commande passée le :</strong> ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 11, $this->source); })()), "createdAt", [], "any", false, false, false, 11), "d/m/Y"), "html", null, true);
        echo "<br/>
    <strong>Référence de ma commande :</strong> <small>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "reference", [], "any", false, false, false, 12), "html", null, true);
        echo "</small><br>
    <strong>Transporteur choisi :</strong> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })()), "carriername", [], "any", false, false, false, 13), "html", null, true);
        echo "
    <hr>
    <strong>Détails:</strong><br/>
    <table class=\"table mt-4\">
        <thead>
            <tr>
                <th scope=\"col\">Produit</th>
                <th scope=\" col\">Quantité</th>
                <th scope=\"col\">Prix unitaire</th>
                <th scope=\"col\">Total</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 26, $this->source); })()), "orderDetails", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 27
            echo "                <tr>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>x";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30) / 100), 2, ", ", ". "), "html", null, true);
            echo " €</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 31) / 100), 2, ", ", ". "), "html", null, true);
            echo " €</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <div class=\"text-right\">
        <strong>Sous-total :</strong> ";
        // line 38
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 38, $this->source); })()), "getTotal", [], "any", false, false, false, 38) / 100), 2, " , ", " . "), "html", null, true);
        echo " € <br/>
        <strong>Livraison :</strong> ";
        // line 39
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 39, $this->source); })()), "carrierprice", [], "any", false, false, false, 39) / 100), 2, ", ", ". "), "html", null, true);
        echo " € <br/>
        <strong>Total : </strong> ";
        // line 40
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 40, $this->source); })()), "carrierPrice", [], "any", false, false, false, 40) + twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 40, $this->source); })()), "getTotal", [], "any", false, false, false, 40)) / 100), 2, ", ", ". "), "html", null, true);
        echo " €
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/order_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 40,  167 => 39,  163 => 38,  157 => 34,  148 => 31,  144 => 30,  140 => 29,  136 => 28,  133 => 27,  129 => 26,  113 => 13,  109 => 12,  105 => 11,  100 => 9,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}}Ma commande{% endblock %}

{% block content %}

    <h1 class=\"mt-5\">Ma commande {{ order.reference }}</h1>
    Bienvenue, {{app.user.firstname}}.
    <a href=\"{{ path('app_account_order') }}\">Retour</a>
    <hr><strong></strong>
    <strong>Commande passée le :</strong> {{ order.createdAt| date('d/m/Y') }}<br/>
    <strong>Référence de ma commande :</strong> <small>{{ order. reference }}</small><br>
    <strong>Transporteur choisi :</strong> {{ order.carriername }}
    <hr>
    <strong>Détails:</strong><br/>
    <table class=\"table mt-4\">
        <thead>
            <tr>
                <th scope=\"col\">Produit</th>
                <th scope=\" col\">Quantité</th>
                <th scope=\"col\">Prix unitaire</th>
                <th scope=\"col\">Total</th>
            </tr>
        </thead>
        <tbody>
            {% for product in order.orderDetails %}
                <tr>
                    <td>{{ product.product }}</td>
                    <td>x{{ product.quantity }}</td>
                    <td>{{ (product.price / 100) | number_format(2, ', ' , '. ') }} €</td>
                    <td>{{ (product.price / 100) | number_format(2, ', ' , '. ') }} €</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"text-right\">
        <strong>Sous-total :</strong> {{ (order.getTotal / 100)| number_format (2, ' , ' , ' . ' ) }} € <br/>
        <strong>Livraison :</strong> {{ (order.carrierprice / 100) | number_format(2, ', ', '. ') }} € <br/>
        <strong>Total : </strong> {{ ((order.carrierPrice + order.getTotal) / 100) | number_format(2, ', ', '. ') }} €
    </div>

{% endblock %}
", "account/order_show.html.twig", "C:\\xampp\\htdocs\\mcmc\\templates\\account\\order_show.html.twig");
    }
}
