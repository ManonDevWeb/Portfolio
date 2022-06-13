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

/* order/add.html.twig */
class __TwigTemplate_5229b4bbdbe12049d5cfa1f7e0b690e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 4
        echo "    <script src=\"https://js.stripe.com/v3/\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Paiement de ma commande";
        
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
        echo "    <h2 class=\"mt-5\">Mon récapitulatif</h2>
    <p>Vérifiez vos informations avant de payer votre commande.</p>
    <hr>
    <div class=\"row\">

        <div class=\"col-12 col-md-6\">
            <strong>Mon adresse de livraison</strong><br>
            <div class=\"form-check mt-4\">
                ";
        // line 19
        echo (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 19, $this->source); })());
        echo "
            </div>
            <hr>
            <strong>Mon transporteur</strong><br>
            <div class=\"form-check\">
                ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo " <br>
                ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), "html", null, true);
        echo " <br>
                ";
        // line 26
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 26, $this->source); })()), "price", [], "any", false, false, false, 26) / 100), 2, ",", "."), "html", null, true);
        echo " €
            </div>
        </div>

        <div class=\"col-12 col-md-6\">
            <div class=\"text-center\">
                <b>Ma commande</b><br>
            </div>
            <div class=\"order-summary\">
                ";
        // line 35
        $context["total"] = null;
        // line 36
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["prod"]) {
            // line 37
            echo "                    <div class=\"row ";
            if (($context["key"] > 0)) {
                echo "mt-2";
            }
            echo "\">
                    
                        <div class=\"col-12 col-md-2\">
                            <img src=\"/uploads/";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 40), "illustration", [], "any", false, false, false, 40), "html", null, true);
            echo "\" height=\"50px\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"col-12 col-md-8 my-auto\">
                            ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
            echo "<br>
                            <small>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 44), "subtitle", [], "any", false, false, false, 44), "html", null, true);
            echo "</small>
                            <br>
                            x ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 46), "html", null, true);
            echo "
                        </div>
                        <div class=\"col-12 col-md-2 my-auto\">
                            ";
            // line 49
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 49), "price", [], "any", false, false, false, 49) * twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 49)) / 100), 2, ",", "."), "html", null, true);
            echo " €
                        </div>
                    </div>
                    ";
            // line 52
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 52, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prod"], "product", [], "any", false, false, false, 52), "price", [], "any", false, false, false, 52) * twig_get_attribute($this->env, $this->source, $context["prod"], "quantity", [], "any", false, false, false, 52)));
            // line 53
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
            <hr>
            <strong>Mon sous-total : </strong>";
        // line 56
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 56, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " €<br>
            <strong>Livraison : </strong>";
        // line 57
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 57, $this->source); })()), "price", [], "any", false, false, false, 57) / 100), 2, ",", "."), "html", null, true);
        echo " €
            <hr>
            <strong>Total : </strong>";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 59, $this->source); })()), "price", [], "any", false, false, false, 59) / 100) + ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 59, $this->source); })()) / 100)), 2, ",", "."), "html", null, true);
        echo " € <br>

            <form action=\"/commande/create-session/";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "\" method=\"POST\">
                ";
        // line 63
        echo "                <button type=\"submit\" class=\"btn btn-success btn-block mt-3\" id=\"checkout-button\">Payer : ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 63, $this->source); })()), "price", [], "any", false, false, false, 63) / 100) + ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 63, $this->source); })()) / 100)), 2, ",", "."), "html", null, true);
        echo " €</button>
            </form>

        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 63,  220 => 61,  215 => 59,  210 => 57,  206 => 56,  202 => 54,  196 => 53,  194 => 52,  188 => 49,  182 => 46,  177 => 44,  173 => 43,  165 => 40,  156 => 37,  151 => 36,  149 => 35,  137 => 26,  133 => 25,  129 => 24,  121 => 19,  111 => 11,  101 => 10,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block javascript %}
    <script src=\"https://js.stripe.com/v3/\"></script>
{% endblock %}

{% block title %}{{parent()}}Paiement de ma commande{% endblock %}


{% block content %}
    <h2 class=\"mt-5\">Mon récapitulatif</h2>
    <p>Vérifiez vos informations avant de payer votre commande.</p>
    <hr>
    <div class=\"row\">

        <div class=\"col-12 col-md-6\">
            <strong>Mon adresse de livraison</strong><br>
            <div class=\"form-check mt-4\">
                {{ delivery|raw}}
            </div>
            <hr>
            <strong>Mon transporteur</strong><br>
            <div class=\"form-check\">
                {{ carrier.name}} <br>
                {{ carrier.description}} <br>
                {{ (carrier.price / 100)|number_format(2,',','.')}} €
            </div>
        </div>

        <div class=\"col-12 col-md-6\">
            <div class=\"text-center\">
                <b>Ma commande</b><br>
            </div>
            <div class=\"order-summary\">
                {% set total = null %}
                {% for key,prod in cart %}
                    <div class=\"row {% if key > 0 %}mt-2{% endif %}\">
                    
                        <div class=\"col-12 col-md-2\">
                            <img src=\"/uploads/{{ prod.product.illustration }}\" height=\"50px\" alt=\"{{ prod.product.name }}\">
                        </div>
                        <div class=\"col-12 col-md-8 my-auto\">
                            {{ prod.product.name }}<br>
                            <small>{{ prod.product.subtitle }}</small>
                            <br>
                            x {{ prod.quantity }}
                        </div>
                        <div class=\"col-12 col-md-2 my-auto\">
                            {{ ((prod.product.price * prod.quantity) /100)|number_format(2,',','.') }} €
                        </div>
                    </div>
                    {% set total = total + (prod.product.price * prod.quantity) %}
                {% endfor %}
            </div>
            <hr>
            <strong>Mon sous-total : </strong>{{ (total /100)|number_format(2,',','.') }} €<br>
            <strong>Livraison : </strong>{{ (carrier.price / 100)|number_format(2,',','.') }} €
            <hr>
            <strong>Total : </strong>{{ ((carrier.price / 100) + (total /100))|number_format(2,',','.') }} € <br>

            <form action=\"/commande/create-session/{{ reference }}\" method=\"POST\">
                {# <a href=\"{{ path('app_stripe_create_session') }}\" class=\"btn btn-success btn-block mt-3\" id=\"checkout-button\">Payer : {{ (carrier.price + (total /100))|number_format(2,',','.') }} €</a> #}
                <button type=\"submit\" class=\"btn btn-success btn-block mt-3\" id=\"checkout-button\">Payer : {{ ((carrier.price / 100) + (total /100))|number_format(2,',','.') }} €</button>
            </form>

        </div>
    </div>
{% endblock %}
", "order/add.html.twig", "C:\\xampp\\htdocs\\mcmc\\templates\\order\\add.html.twig");
    }
}
