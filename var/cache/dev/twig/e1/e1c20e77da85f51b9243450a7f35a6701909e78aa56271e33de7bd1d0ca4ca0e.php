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

/* profile/index.html.twig */
class __TwigTemplate_4e7d2c876c68431b9e3b86e101917f9bf2ca6820a7c80ce861236121efb98f28 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 1);
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

        echo "Profile Informations";
        
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
    <h1 class=\"text-center my-5\">Informations du Profil</h1>

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "
            <div class=\"alert alert-dismissible alert-success flash-notice\">
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                <strong>Profil modifié !</strong> ";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo ".
            </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    <div class=\"d-flex row justify-content-around align-items-baseline mt-5\">

        <div class=\"left-block col-4\">
            <p><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_change", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\" class=\"btn btn-outline-warning\">MODIFIER LES INFORMATIONS</a></p>
            <p><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)]), "html", null, true);
        echo "\" class=\"btn btn-outline-danger\">SUPPRIMER LE PROFIL</a></p>
            <p><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("address", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\" class=\"btn btn-outline-success\">AJOUTER UNE ADRESSE</a></p>
            <p><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_change_password", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)]), "html", null, true);
        echo "\" class=\"btn btn-outline-warning\">MODIFIER LE MOT DE PASSE</a></p>
        </div>

        <div class=\"right-block col-4\">
            <p><strong>Adresse Mail : </strong> <span class=\"text-uppercase\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "email", [], "any", false, false, false, 28), "html", null, true);
        echo "</span></p>
            <p><strong>Prénom : </strong> <span class=\"text-uppercase\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "firstname", [], "any", false, false, false, 29), "html", null, true);
        echo "</span></p>
            <p><strong>Genre : </strong> <span class=\"text-uppercase\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "genre", [], "any", false, false, false, 30), "html", null, true);
        echo "</span></p>
            <p><strong>Date de Naissance : </strong> <span>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "birthdate", [], "any", false, false, false, 31), "d-m-Y"), "html", null, true);
        echo "</span></p>
            <p><strong>Nom : </strong> <span class=\"text-uppercase\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "lastname", [], "any", false, false, false, 32), "html", null, true);
        echo "</span></p>


        </div>

    </div>

    <div class=\"mt-5\"><strong class=\"text-uppercase\">Adresses Postales : </strong></div>
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "adresses", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["adress"]) {
            // line 41
            echo "        <hr>
        <div class=\"d-flex row justify-content-around align-items-baseline\">

                <div class=\"text-center col-9\">
                    <span class=\"text-uppercase\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "number", [], "any", false, false, false, 45), "html", null, true);
            echo "</span>,
                    <span class=\"text-uppercase\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "street", [], "any", false, false, false, 46), "html", null, true);
            echo "</span>,
                    <span class=\"text-uppercase\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "zipcode", [], "any", false, false, false, 47), "html", null, true);
            echo "</span>,
                    <span class=\"text-uppercase\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "city", [], "any", false, false, false, 48), "html", null, true);
            echo "</span>
                </div>

        <div class=\"d-flex col-3\">
            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("address_change", ["id" => twig_get_attribute($this->env, $this->source, $context["adress"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"btn btn-outline-warning ms-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Cliquez pour modifier\">MODIFIER</a>
            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("address_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["adress"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"btn btn-outline-danger ms-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Cliquez pour supprimer\">SUPPRIMER</a>
        </div>

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adress'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 58,  197 => 53,  193 => 52,  186 => 48,  182 => 47,  178 => 46,  174 => 45,  168 => 41,  164 => 40,  153 => 32,  149 => 31,  145 => 30,  141 => 29,  137 => 28,  130 => 24,  126 => 23,  122 => 22,  118 => 21,  112 => 17,  102 => 13,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile Informations{% endblock %}

{% block body %}

    <h1 class=\"text-center my-5\">Informations du Profil</h1>

    {% for message in app.flashes('notice') %}

            <div class=\"alert alert-dismissible alert-success flash-notice\">
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                <strong>Profil modifié !</strong> {{ message}}.
            </div>

    {% endfor %}

    <div class=\"d-flex row justify-content-around align-items-baseline mt-5\">

        <div class=\"left-block col-4\">
            <p><a href=\"{{ path('profile_change', {id:app.user.id}) }}\" class=\"btn btn-outline-warning\">MODIFIER LES INFORMATIONS</a></p>
            <p><a href=\"{{ path('profile_delete', {id:app.user.id}) }}\" class=\"btn btn-outline-danger\">SUPPRIMER LE PROFIL</a></p>
            <p><a href=\"{{ path('address', {id:app.user.id}) }}\" class=\"btn btn-outline-success\">AJOUTER UNE ADRESSE</a></p>
            <p><a href=\"{{ path('profile_change_password', {id:app.user.id}) }}\" class=\"btn btn-outline-warning\">MODIFIER LE MOT DE PASSE</a></p>
        </div>

        <div class=\"right-block col-4\">
            <p><strong>Adresse Mail : </strong> <span class=\"text-uppercase\">{{ app.user.email }}</span></p>
            <p><strong>Prénom : </strong> <span class=\"text-uppercase\">{{ app.user.firstname }}</span></p>
            <p><strong>Genre : </strong> <span class=\"text-uppercase\">{{ app.user.genre }}</span></p>
            <p><strong>Date de Naissance : </strong> <span>{{ app.user.birthdate|date('d-m-Y') }}</span></p>
            <p><strong>Nom : </strong> <span class=\"text-uppercase\">{{ app.user.lastname }}</span></p>


        </div>

    </div>

    <div class=\"mt-5\"><strong class=\"text-uppercase\">Adresses Postales : </strong></div>
    {% for adress in app.user.adresses %}
        <hr>
        <div class=\"d-flex row justify-content-around align-items-baseline\">

                <div class=\"text-center col-9\">
                    <span class=\"text-uppercase\">{{ adress.number }}</span>,
                    <span class=\"text-uppercase\">{{ adress.street }}</span>,
                    <span class=\"text-uppercase\">{{ adress.zipcode }}</span>,
                    <span class=\"text-uppercase\">{{ adress.city }}</span>
                </div>

        <div class=\"d-flex col-3\">
            <a href=\"{{ path('address_change', {id:adress.id}) }}\" class=\"btn btn-outline-warning ms-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Cliquez pour modifier\">MODIFIER</a>
            <a href=\"{{ path('address_delete', {id:adress.id}) }}\" class=\"btn btn-outline-danger ms-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Cliquez pour supprimer\">SUPPRIMER</a>
        </div>

        </div>
    {% endfor %}


{% endblock %}
", "profile/index.html.twig", "/home/julien/Documents/Projet/testDev-testing_branch/templates/profile/index.html.twig");
    }
}
