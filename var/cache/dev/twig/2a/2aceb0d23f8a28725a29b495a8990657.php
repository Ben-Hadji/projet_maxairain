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

/* default/index.html.twig */
class __TwigTemplate_c038f15fec8b18a250e6c8157360829b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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

        echo "Page d'accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
    <div class=\"contenue_accueil\">
        <div class=\"texte-accueil\">
            Depuis 2015, la société « MaxAirain » intervient dans le cadre de la sécurité, du gardiennage, de la
        protection et de la surveillance. Leur mission consiste à assurer la sécurité des activités, déplacements
        et manifestations de leur client.
        </div>
        <div class=\"image_accueil\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/image_accueil.png"), "html", null, true);
        echo "\" alt=\"image accueil de MaxAiRain\">
        </div>
    </div>
   
    <h2>Liste des agents</h2>

    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 24
            echo "    <div class=\"col-md-4\">
        <div class=\"card\">
            ";
            // line 26
            if ((null === twig_get_attribute($this->env, $this->source, $context["info"], "image", [], "any", false, false, false, 26))) {
                // line 27
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/avatar.png"), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"Image 1\">
            ";
            } else {
                // line 29
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["info"], "image", [], "any", false, false, false, 29)), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"Image 1\">
            ";
            }
            // line 31
            echo "            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "nom", [], "any", false, false, false, 32), "html", null, true);
            echo "</h5>
                <p class=\"card-text\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "email", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
            
        </div>
    </div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 38,  139 => 33,  135 => 32,  132 => 31,  126 => 29,  120 => 27,  118 => 26,  114 => 24,  110 => 23,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page d'accueil{% endblock %}

{% block body %}

<div class=\"container\">
    <div class=\"contenue_accueil\">
        <div class=\"texte-accueil\">
            Depuis 2015, la société « MaxAirain » intervient dans le cadre de la sécurité, du gardiennage, de la
        protection et de la surveillance. Leur mission consiste à assurer la sécurité des activités, déplacements
        et manifestations de leur client.
        </div>
        <div class=\"image_accueil\">
            <img src=\"{{ asset('image/image_accueil.png') }}\" alt=\"image accueil de MaxAiRain\">
        </div>
    </div>
   
    <h2>Liste des agents</h2>

    <div class=\"container\">
        <div class=\"row\">
            {% for info in users %}
    <div class=\"col-md-4\">
        <div class=\"card\">
            {% if info.image is null %}
                <img src=\"{{ asset('image/avatar.png') }}\" class=\"card-img-top\" alt=\"Image 1\">
            {% else %}
                <img src=\"{{ asset(info.image) }}\" class=\"card-img-top\" alt=\"Image 1\">
            {% endif %}
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ info.nom }}</h5>
                <p class=\"card-text\">{{ info.email }}</p>
            </div>
        </div>
    </div>
{% endfor %}

            
        </div>
    </div>

</div>
{% endblock %}
", "default/index.html.twig", "/home/lamia/Symfony/projet_maxairain/templates/default/index.html.twig");
    }
}
