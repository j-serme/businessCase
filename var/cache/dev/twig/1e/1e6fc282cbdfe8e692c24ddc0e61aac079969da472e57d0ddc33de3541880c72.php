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

/* admin/products/index.html.twig */
class __TwigTemplate_bb3c3d718c4046136dc5f99fbb937f0b8918e3c1be093cc093159510d943b424 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/products/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/products/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/products/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Tableau des produits ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h1 class=\"text-center my-5\">Gestion de vos produits</h1>

<table class=\"table table-hover table-striped\">
  <thead>
  <tr class=\"text-center\">
    <th scope=\"col\">ID</th>
    <th scope=\"col\">Nom</th>
    <th scope=\"col\">Marque</th>
    <th scope=\"col\">Description</th>
    <th scope=\"col\">Prix</th>
    <th scope=\"col\">Quantité</th>
    <th scope=\"col\">Actif</th>
    <th scope=\"col\">Catégorie</th>

  </tr>
  </thead>
  <tbody>

  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 26
            echo "  <tr class=\"table-light text-center\">


    <th scope=\"row\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</th>
    <td class=\"text-uppercase\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
    <td class=\"text-uppercase\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "brand", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
    <td class=\"text-uppercase\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
    <td class=\"text-uppercase\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
    <td class=\"text-uppercase\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
    <td class=\"text-uppercase\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
    <td class=\"text-uppercase\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>

    <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_change", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"text-uppercase btn btn-outline-dark\">Modifier</a>
    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"text-uppercase btn btn-outline-danger\">Supprimer</a></td>


  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
  </tbody>
</table>

  <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\" class=\"btn btn-outline-dark\">RETOUR</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/products/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 48,  166 => 44,  155 => 39,  151 => 38,  146 => 36,  142 => 35,  138 => 34,  134 => 33,  130 => 32,  126 => 31,  122 => 30,  118 => 29,  113 => 26,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Tableau des produits {% endblock %}

{% block body %}

  <h1 class=\"text-center my-5\">Gestion de vos produits</h1>

<table class=\"table table-hover table-striped\">
  <thead>
  <tr class=\"text-center\">
    <th scope=\"col\">ID</th>
    <th scope=\"col\">Nom</th>
    <th scope=\"col\">Marque</th>
    <th scope=\"col\">Description</th>
    <th scope=\"col\">Prix</th>
    <th scope=\"col\">Quantité</th>
    <th scope=\"col\">Actif</th>
    <th scope=\"col\">Catégorie</th>

  </tr>
  </thead>
  <tbody>

  {% for product in products %}
  <tr class=\"table-light text-center\">


    <th scope=\"row\">{{ product.id }}</th>
    <td class=\"text-uppercase\">{{ product.name }}</td>
    <td class=\"text-uppercase\">{{ product.brand }}</td>
    <td class=\"text-uppercase\">{{ product.description }}</td>
    <td class=\"text-uppercase\">{{ product.price }}</td>
    <td class=\"text-uppercase\">{{ product.quantity }}</td>
    <td class=\"text-uppercase\">{{ product.isActive }}</td>
    <td class=\"text-uppercase\">{{ product.category.name }}</td>

    <td><a href=\"{{ path('product_change', {id:product.id}) }}\" class=\"text-uppercase btn btn-outline-dark\">Modifier</a>
    <a href=\"{{ path('product_delete', {id:product.id}) }}\" class=\"text-uppercase btn btn-outline-danger\">Supprimer</a></td>


  </tr>
  {% endfor %}

  </tbody>
</table>

  <a href=\"{{ path('admin') }}\" class=\"btn btn-outline-dark\">RETOUR</a>

{% endblock %}
", "admin/products/index.html.twig", "/home/julien/Documents/Projet/testDev-testing_branch/templates/admin/products/index.html.twig");
    }
}
