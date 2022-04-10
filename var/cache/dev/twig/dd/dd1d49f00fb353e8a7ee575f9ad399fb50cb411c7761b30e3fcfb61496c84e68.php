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

/* admin/products/edit.html.twig */
class __TwigTemplate_0bd7b7113d14255b83976232394007c504f44777c230632f5c92f7f644bf48b7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/products/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/products/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/products/edit.html.twig", 1);
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

        echo " Tableau des catégories ";
        
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
        echo "  <h1 class=\"text-center my-5\">Gestion de vos produits</h1>

  ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "

  ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), 'row');
        echo "
  ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "brand", [], "any", false, false, false, 11), 'row');
        echo "
  ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12), 'row');
        echo "

  ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "price", [], "any", false, false, false, 14), 'row');
        echo "
  ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "quantity", [], "any", false, false, false, 15), 'row');
        echo "
  ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "isActive", [], "any", false, false, false, 16), 'row');
        echo "
  ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "category", [], "any", false, false, false, 17), 'row');
        echo "
  <button type=\"button\" class=\"add_item_link btn btn-outline-warning\" data-collection-holder-class=\"tags\">Ajoute une image</button>
  <ul class=\"tags list-unstyled\"
       data-index=\"";
        // line 20
        (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "pictures", [], "any", false, false, false, 20)), 0))) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "pictures", [], "any", false, false, false, 20)), "vars", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20) + 1), "html", null, true))) : (print (0)));
        echo "\"
      data-prototype=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "pictures", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "prototype", [], "any", false, false, false, 21), 'widget'), "html_attr");
        echo "\"
  ></ul>
  <div class=\"d-flex\" style=\"width: 150px\">
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "pictures", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 25
            echo "      ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["picture"], 'widget');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  </div>


";
        // line 31
        echo "
  <button type=\"submit\" class=\"btn btn-outline-success\">Valider</button>
  ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_end');
        echo "

  <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\" class=\"btn btn-outline-dark\">RETOUR</a>



  <script>

    const addFormToCollection = (e) => {
      const collectionHolder = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);

      const item = document.createElement('li');

      item.innerHTML = collectionHolder
              .dataset
              .prototype
              .replace(
                      /__name__/g,
                      collectionHolder.dataset.index
              );

      collectionHolder.appendChild(item);

      collectionHolder.dataset.index++;

       // addTagFormDeleteLink(item);
    };

    document
            .querySelectorAll('.add_item_link')
            .forEach(btn => {
              btn.addEventListener(\"click\", addFormToCollection)
            });






/*
    const addTagFormDeleteLink = (item) => {

      const removeFormButton = document.querySelectorAll('.remove_item_link');

      item.append(removeFormButton);

      removeFormButton.addEventListener('click', (e) => {
        e.preventDefault();
        item.remove()
      })
    };


    document.querySelectorAll('li')
            .forEach((btn) => {
              addTagFormDeleteLink(btn)
    })
*/



  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/products/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 35,  160 => 33,  156 => 31,  151 => 27,  142 => 25,  138 => 24,  132 => 21,  128 => 20,  122 => 17,  118 => 16,  114 => 15,  110 => 14,  105 => 12,  101 => 11,  97 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Tableau des catégories {% endblock %}

{% block body %}
  <h1 class=\"text-center my-5\">Gestion de vos produits</h1>

  {{ form_start(form) }}

  {{ form_row(form.name) }}
  {{ form_row(form.brand) }}
  {{ form_row(form.description) }}

  {{ form_row(form.price) }}
  {{ form_row(form.quantity) }}
  {{ form_row(form.isActive) }}
  {{ form_row(form.category) }}
  <button type=\"button\" class=\"add_item_link btn btn-outline-warning\" data-collection-holder-class=\"tags\">Ajoute une image</button>
  <ul class=\"tags list-unstyled\"
       data-index=\"{{ form.pictures|length > 0 ? form.pictures|last.vars.name + 1 : 0 }}\"
      data-prototype=\"{{ form_widget(form.pictures.vars.prototype)|e('html_attr')}}\"
  ></ul>
  <div class=\"d-flex\" style=\"width: 150px\">
    {% for picture in form.pictures %}
      {{ form_widget(picture)}}
    {% endfor %}
  </div>


{#  <button type=\"button\" class=\"remove_item_link btn btn-outline-warning\" data-collection-holder-class=\"tags\">Supprime une image</button> #}

  <button type=\"submit\" class=\"btn btn-outline-success\">Valider</button>
  {{ form_end(form) }}

  <a href=\"{{ path('admin') }}\" class=\"btn btn-outline-dark\">RETOUR</a>



  <script>

    const addFormToCollection = (e) => {
      const collectionHolder = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);

      const item = document.createElement('li');

      item.innerHTML = collectionHolder
              .dataset
              .prototype
              .replace(
                      /__name__/g,
                      collectionHolder.dataset.index
              );

      collectionHolder.appendChild(item);

      collectionHolder.dataset.index++;

       // addTagFormDeleteLink(item);
    };

    document
            .querySelectorAll('.add_item_link')
            .forEach(btn => {
              btn.addEventListener(\"click\", addFormToCollection)
            });






/*
    const addTagFormDeleteLink = (item) => {

      const removeFormButton = document.querySelectorAll('.remove_item_link');

      item.append(removeFormButton);

      removeFormButton.addEventListener('click', (e) => {
        e.preventDefault();
        item.remove()
      })
    };


    document.querySelectorAll('li')
            .forEach((btn) => {
              addTagFormDeleteLink(btn)
    })
*/



  </script>
{% endblock %}

", "admin/products/edit.html.twig", "/home/julien/Documents/Projet/testDev-testing_branch/templates/admin/products/edit.html.twig");
    }
}
