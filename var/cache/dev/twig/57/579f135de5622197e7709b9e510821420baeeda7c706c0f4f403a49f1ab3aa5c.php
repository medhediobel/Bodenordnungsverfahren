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
class __TwigTemplate_9b48b7b9e6d20ab318b0b61272ffa49a88e1c7a33ad2851938e4661c26f7b212 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "DLR Portal";
        
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
        echo "<style>
\t\t.articles {
\t\t\tborder-radius: 10px;
\t\t\tbox-shadow: 0 16px 16px rgba(0, 0, 0, .25);
\t\t\tpadding: 16px 20px;
\t\t}
\t\timg {
\t\t\tborder-radius: 10px;
\t\t\tbox-shadow: 0 16px 16px rgba(0, 0, 0, .25);
\t\t\tmargin: 10px;
\t\t}
\t
\t</style>

<div class=\"jumbotron text-center\">
\t<h4 class=\"mt-5 mb-5\">Anhörungstermin  Flurbereinigung zur Aufstellung des Planes über die gemeinschaftlichen und öffentlichen Anlagen</h4>
\t<h5>Alle Bodenordnungsverfahren RLP</h5>
</div>
<div class=\"container\">
\t\t<form action=\"\">
\t\t\t<label for=\"cars\">Dienstsitz:</label>
\t\t\t<select name=\"cars\" id=\"cars\">
\t\t\t\t\t<option value=\"\">Mayen</option>
\t\t\t\t\t<option value=\"\">Bad Kreuznach</option>
\t\t\t\t\t<option value=\"\">Bernkastel-Kues</option>
\t\t\t\t\t<option value=\"\">Bitburg</option>
\t\t\t\t\t<option value=\"\">Kaiserslautern</option>
\t\t\t</select>
\t\t\t\t<br><br>
\t\t\t<input type=\"submit\" value=\"Submit\">
\t\t</form>
</div>

";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["verfahren"]);
        foreach ($context['_seq'] as $context["_key"] => $context["verfahren"]) {
            // line 40
            echo "\t<section class=\"articles mt-5\">
\t\t\t<article class=\"b-5m\">
\t\t\t\t<div class=\"metadata\">
\t\t\t\t\t<span> V.Nr:  ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["verfahren"], "nummer", [], "any", false, false, false, 43), "html", null, true);
            echo " </span> <span> </span>
\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verfahren_show", ["id" => twig_get_attribute($this->env, $this->source, $context["verfahren"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\"><h2> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["verfahren"], "name", [], "any", false, false, false, 44), "html", null, true);
            echo "  </h2> </a> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["verfahren"], "dienstsitz", [], "any", false, false, false, 44), "ort", [], "any", false, false, false, 44), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"metadata\">
\t\t\t\t<span class=\"display-6\">
\t\t\t\t\t\t ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["verfahren"], "art", [], "any", false, false, false, 48), "html", null, true);
            echo "
\t\t\t\t\t</span>
\t\t\t\t\tam ";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["verfahren"], "createdAt", [], "any", false, false, false, 50), "d.m.y"), "html", null, true);
            echo " Um ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["verfahren"], "createdAt", [], "any", false, false, false, 50), "H:i"), "html", null, true);
            echo " uhr
\t\t\t\t\t<span class=\"badge badge-danger\">
\t\t\t\t\t\t
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"badge badge-success\">
\t\t\t\t\t\t 
\t\t\t\t\t</span>
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t\t<br><br>
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t\t\t\t<p> ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["verfahren"], "ziel", [], "any", false, false, false, 62), "html", null, true);
            echo " </p>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t</section>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['verfahren'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t";
        // line 71
        echo "\t\t\t\t<div class=\"navigation mt-5 mb-5\">
\t\t\t\t\t";
        // line 72
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["verfahren"]) || array_key_exists("verfahren", $context) ? $context["verfahren"] : (function () { throw new RuntimeError('Variable "verfahren" does not exist.', 72, $this->source); })()));
        echo "
\t\t\t\t</div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  188 => 72,  185 => 71,  183 => 70,  169 => 62,  152 => 50,  147 => 48,  136 => 44,  132 => 43,  127 => 40,  123 => 39,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DLR Portal{% endblock %}

{% block body %}
<style>
\t\t.articles {
\t\t\tborder-radius: 10px;
\t\t\tbox-shadow: 0 16px 16px rgba(0, 0, 0, .25);
\t\t\tpadding: 16px 20px;
\t\t}
\t\timg {
\t\t\tborder-radius: 10px;
\t\t\tbox-shadow: 0 16px 16px rgba(0, 0, 0, .25);
\t\t\tmargin: 10px;
\t\t}
\t
\t</style>

<div class=\"jumbotron text-center\">
\t<h4 class=\"mt-5 mb-5\">Anhörungstermin  Flurbereinigung zur Aufstellung des Planes über die gemeinschaftlichen und öffentlichen Anlagen</h4>
\t<h5>Alle Bodenordnungsverfahren RLP</h5>
</div>
<div class=\"container\">
\t\t<form action=\"\">
\t\t\t<label for=\"cars\">Dienstsitz:</label>
\t\t\t<select name=\"cars\" id=\"cars\">
\t\t\t\t\t<option value=\"\">Mayen</option>
\t\t\t\t\t<option value=\"\">Bad Kreuznach</option>
\t\t\t\t\t<option value=\"\">Bernkastel-Kues</option>
\t\t\t\t\t<option value=\"\">Bitburg</option>
\t\t\t\t\t<option value=\"\">Kaiserslautern</option>
\t\t\t</select>
\t\t\t\t<br><br>
\t\t\t<input type=\"submit\" value=\"Submit\">
\t\t</form>
</div>

{% for verfahren in verfahren %}
\t<section class=\"articles mt-5\">
\t\t\t<article class=\"b-5m\">
\t\t\t\t<div class=\"metadata\">
\t\t\t\t\t<span> V.Nr:  {{ verfahren.nummer}} </span> <span> </span>
\t\t\t\t\t<a href=\"{{ path('verfahren_show', {'id' : verfahren.id }) }}\"><h2> {{ verfahren.name }}  </h2> </a> {{ verfahren.dienstsitz.ort }}
\t\t\t\t</div>
\t\t\t\t<div class=\"metadata\">
\t\t\t\t<span class=\"display-6\">
\t\t\t\t\t\t {{ verfahren.art}}
\t\t\t\t\t</span>
\t\t\t\t\tam {{ verfahren.createdAt | date('d.m.y')}} Um {{ verfahren.createdAt | date('H:i')}} uhr
\t\t\t\t\t<span class=\"badge badge-danger\">
\t\t\t\t\t\t
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"badge badge-success\">
\t\t\t\t\t\t 
\t\t\t\t\t</span>
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t\t<br><br>
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t\t\t\t<p> {{ verfahren.ziel }} </p>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t</section>

{% endfor %}
\t\t\t{# display navigation #}
\t\t\t\t<div class=\"navigation mt-5 mb-5\">
\t\t\t\t\t{{ knp_pagination_render(verfahren) }}
\t\t\t\t</div>
    
{% endblock %}


", "home/index.html.twig", "C:\\xampp\\htdocs\\symfony\\BodenordnungsVerfahren\\templates\\home\\index.html.twig");
    }
}
