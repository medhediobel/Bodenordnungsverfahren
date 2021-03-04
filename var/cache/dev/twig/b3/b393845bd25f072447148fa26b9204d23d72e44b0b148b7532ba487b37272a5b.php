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

/* home/show.html.twig */
class __TwigTemplate_089b61b5ea6b782ec1e6bb6717f455e2b24eb01b57cad0668a95b9268421b2b1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["verfahren"]) || array_key_exists("verfahren", $context) ? $context["verfahren"] : (function () { throw new RuntimeError('Variable "verfahren" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
.articles {
\t\t\tborder-radius: 10px;
\t\t\tbox-shadow: 0 16px 16px rgba(0, 0, 0, 0.25);
\t\t\tpadding: 16px 20px;
\t\t}
\t\timg {
\t\t\tborder-radius: 10px;
\t\t\tbox-shadow: 0 16px 16px rgba(0, 0, 0, 0.25);
\t\t\tmargin: 10px;
\t\t}

\t\t#comments {
\t\t\tpadding: 15px;
\t\t}
\t\t#mapid{
\t\t\theight: 400px;
\t\t}
\t</style>

    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "\t<div class=\"alert alert-success\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
\t<section class=\"articles mt-5\">
\t\t<article class=\"b-5m\">
\t\t<h4>V.Art : ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["verfahren"]) || array_key_exists("verfahren", $context) ? $context["verfahren"] : (function () { throw new RuntimeError('Variable "verfahren" does not exist.', 32, $this->source); })()), "art", [], "any", false, false, false, 32), "html", null, true);
        echo "</h4>
\t\t\t<div class=\"container mt-4\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\tVerfahrensbilder
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<h3>Verfahrensdaten</h3>
                        <h5>Dienstsitz :\t";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["verfahren"]) || array_key_exists("verfahren", $context) ? $context["verfahren"] : (function () { throw new RuntimeError('Variable "verfahren" does not exist.', 40, $this->source); })()), "dienstsitz", [], "any", false, false, false, 40), "ort", [], "any", false, false, false, 40), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t<h5>V.Nr :\t";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["verfahren"]) || array_key_exists("verfahren", $context) ? $context["verfahren"] : (function () { throw new RuntimeError('Variable "verfahren" does not exist.', 41, $this->source); })()), "nummer", [], "any", false, false, false, 41), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t<h6></h6>
\t\t\t\t\t\t<span class=\"display-6\"></span>

<!-- Button trigger modal -->
<div>
    <button type=\"button\" class=\"btn btn-primary mt-5 mb-5\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\">
    E-mail
    </button>
</div>

            \t\t\t
<!-- Modal -->
<div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"staticBackdropLabel\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["verfahren"]) || array_key_exists("verfahren", $context) ? $context["verfahren"] : (function () { throw new RuntimeError('Variable "verfahren" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58), "html", null, true);
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
\t 
      <div class=\"modal-body\">
        
\t\t
\t\t
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Schließen</button>
        <button type=\"button\" class=\"btn btn-primary\">Senden</button>
      </div>
\t  
    </div>
  </div>
</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-primary\" style=\"font-size: 4rem;font-weight:bold;\">
\t\t\t\t\t<a href=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["verfahren"]) || array_key_exists("verfahren", $context) ? $context["verfahren"] : (function () { throw new RuntimeError('Variable "verfahren" does not exist.', 79, $this->source); })()), "link", [], "any", false, false, false, 79), "html", null, true);
        echo "\">
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["verfahren"]) || array_key_exists("verfahren", $context) ? $context["verfahren"] : (function () { throw new RuntimeError('Variable "verfahren" does not exist.', 81, $this->source); })()), "name", [], "any", false, false, false, 81), "html", null, true);
        echo "
\t\t\t\t\t\t</h2>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"metadata\">
                <h3>Aktualisierung: am\t";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["verfahren"]) || array_key_exists("verfahren", $context) ? $context["verfahren"] : (function () { throw new RuntimeError('Variable "verfahren" does not exist.', 86, $this->source); })()), "createdAt", [], "any", false, false, false, 86), "d.m.y"), "html", null, true);
        echo "    Um\t\t";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["verfahren"]) || array_key_exists("verfahren", $context) ? $context["verfahren"] : (function () { throw new RuntimeError('Variable "verfahren" does not exist.', 86, $this->source); })()), "createdAt", [], "any", false, false, false, 86), "H:i"), "html", null, true);
        echo "\t\tuhr</h3>
\t\t\t\t\t
\t\t\t\t\t<span class=\"badge badge-success\">
\t\t\t\t\t\t";
        // line 89
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["verfahren"]) || array_key_exists("verfahren", $context) ? $context["verfahren"] : (function () { throw new RuntimeError('Variable "verfahren" does not exist.', 89, $this->source); })()), "comments", [], "any", false, false, false, 89)), "html", null, true);
        echo "
\t\t\t\t\t\tStellungnahmen
\t\t\t\t\t</span>
\t\t\t\t\t
\t\t\t\t\t\tvon
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t
\t\t\t\t\t\t</strong>

\t\t\t\t</div>
                    <p>
                        ";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["verfahren"]) || array_key_exists("verfahren", $context) ? $context["verfahren"] : (function () { throw new RuntimeError('Variable "verfahren" does not exist.', 100, $this->source); })()), "inhalt", [], "any", false, false, false, 100), "html", null, true);
        echo "
                    </p>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Karten</th>
\t\t\t\t\t\t\t\t<th>Formulare</th>
\t\t\t\t\t\t\t\t<th>Antrag</th>
\t\t\t\t\t\t\t\t<th>Information</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Auszuge</td>
\t\t\t\t\t\t\t\t<td><a href=\"https://www.dlr.rlp.de/Internet/lew/LEW_Verfahren.nsf/c47a098de8697f77c12582f10023db80?OpenForm&ParentUNID=1449B923025F1ADCC1257C5D000592DC&InheritParent=2\">Vollmacht</a></td>
\t\t\t\t\t\t\t\t<td><a href=\"https://www.dlr.rlp.de/Internet/lew/LEW_Verfahren.nsf/824ae548db9349bcc1257ef2004ecde8?OpenForm&ParentUNID=6F7DAB3DE35ADBADC125746000730018&InheritParent=2\">Antrag auf Abmarkung</a></td>
\t\t\t\t\t\t\t\t<td><a href=\"https://www.dlr.rlp.de/Internet/lew/LEW_Verfahren.nsf/dc23183df95bb797c1257eeb0049d409?OpenForm&ParentUNID=6F7DAB3DE35ADBADC125746000730018&InheritParent=2\">Vermessung und Abmarkung</a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t\t<td><a href=\"https://www.dlr.rlp.de/Internet/lew/LEW_Verfahren.nsf/47475a97d751c66ac1257f0000388eb8?OpenForm&ParentUNID=1449B923025F1ADCC1257C5D000592DC&InheritParent=2\">Erklärung</a></td>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Flurbereinigungsplan</td>
\t\t\t\t\t\t\t\t<td><a href=\"https://www.dlr.rlp.de/Internet/lew/LEW_Verfahren.nsf/764f2c8ac080e9ecc12581d2003bac39?OpenForm&ParentUNID=1449B923025F1ADCC1257C5D000592DC&InheritParent=2\">Empfangsvollmacht</a></td>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            <p>
            ";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["verfahren"]) || array_key_exists("verfahren", $context) ? $context["verfahren"] : (function () { throw new RuntimeError('Variable "verfahren" does not exist.', 140, $this->source); })()), "ziel", [], "any", false, false, false, 140), "html", null, true);
        echo "
            </p>
\t\t</article>
\t</section>
    ";
        // line 144
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 145
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verfahren_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["verfahren"]) || array_key_exists("verfahren", $context) ? $context["verfahren"] : (function () { throw new RuntimeError('Variable "verfahren" does not exist.', 145, $this->source); })()), "id", [], "any", false, false, false, 145)]), "html", null, true);
            echo "\" class=\"btn btn-success mt-5 mb-5\">ändern</a>
\t";
        }
        // line 147
        echo "

\t<h2 class=\"mt-5 mb-5\">Die Stellungnahmen</h2>
\t<section id=\"comments\">
\t\t";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["verfahren"]) || array_key_exists("verfahren", $context) ? $context["verfahren"] : (function () { throw new RuntimeError('Variable "verfahren" does not exist.', 151, $this->source); })()), "comments", [], "any", false, false, false, 151));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 152
            echo "\t\t\t<div class=\"comment\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"md-col-3\" style=\"color:red;\">
\t\t\t\t\t\t<h3>";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "toeb", [], "any", false, false, false, 155), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t<small>";
            // line 157
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 157), "d.m.Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\tUm
\t\t\t\t\t\t\t";
            // line 159
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 159), "H:i"), "html", null, true);
            echo "</small>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<p>";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "einwendung", [], "any", false, false, false, 162), "html", null, true);
            echo "</p>
\t\t\t</div>

\t\t\t<hr>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "\t</section>
    <hr>
    <section>
\t\t\t<h2>Einwendung schreiben
\t\t\t</h2>

\t\t\t";
        // line 174
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 174, $this->source); })()), 'form_start');
        echo "
\t\t\t";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 175, $this->source); })()), 'widget');
        echo "

\t\t\t<button class=\"btn btn-success mt-5 mb-5\">
\t\t\t\tVerleger
\t\t\t</button>

\t\t\t";
        // line 181
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 181, $this->source); })()), 'form_end');
        echo "
\t</section>
\t<hr>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 181,  335 => 175,  331 => 174,  323 => 168,  311 => 162,  305 => 159,  300 => 157,  295 => 155,  290 => 152,  286 => 151,  280 => 147,  274 => 145,  272 => 144,  265 => 140,  222 => 100,  208 => 89,  200 => 86,  192 => 81,  187 => 79,  163 => 58,  143 => 41,  139 => 40,  128 => 32,  123 => 29,  114 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ verfahren.name }}{% endblock %}

{% block body %}
<style>
.articles {
\t\t\tborder-radius: 10px;
\t\t\tbox-shadow: 0 16px 16px rgba(0, 0, 0, 0.25);
\t\t\tpadding: 16px 20px;
\t\t}
\t\timg {
\t\t\tborder-radius: 10px;
\t\t\tbox-shadow: 0 16px 16px rgba(0, 0, 0, 0.25);
\t\t\tmargin: 10px;
\t\t}

\t\t#comments {
\t\t\tpadding: 15px;
\t\t}
\t\t#mapid{
\t\t\theight: 400px;
\t\t}
\t</style>

    {% for message in app.flashes('message') %}
\t<div class=\"alert alert-success\" role=\"alert\">{{ message }}</div>
\t{% endfor %}

\t<section class=\"articles mt-5\">
\t\t<article class=\"b-5m\">
\t\t<h4>V.Art : {{ verfahren.art}}</h4>
\t\t\t<div class=\"container mt-4\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\tVerfahrensbilder
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<h3>Verfahrensdaten</h3>
                        <h5>Dienstsitz :\t{{ verfahren.dienstsitz.ort }}</h5>
\t\t\t\t\t\t<h5>V.Nr :\t{{ verfahren.nummer}}</h5>
\t\t\t\t\t\t<h6></h6>
\t\t\t\t\t\t<span class=\"display-6\"></span>

<!-- Button trigger modal -->
<div>
    <button type=\"button\" class=\"btn btn-primary mt-5 mb-5\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\">
    E-mail
    </button>
</div>

            \t\t\t
<!-- Modal -->
<div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"staticBackdropLabel\">{{ verfahren.name }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
\t 
      <div class=\"modal-body\">
        
\t\t
\t\t
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Schließen</button>
        <button type=\"button\" class=\"btn btn-primary\">Senden</button>
      </div>
\t  
    </div>
  </div>
</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-primary\" style=\"font-size: 4rem;font-weight:bold;\">
\t\t\t\t\t<a href=\"{{ verfahren.link }}\">
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t{{ verfahren.name }}
\t\t\t\t\t\t</h2>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"metadata\">
                <h3>Aktualisierung: am\t{{ verfahren.createdAt | date('d.m.y')}}    Um\t\t{{ verfahren.createdAt | date('H:i')}}\t\tuhr</h3>
\t\t\t\t\t
\t\t\t\t\t<span class=\"badge badge-success\">
\t\t\t\t\t\t{{ verfahren.comments | length }}
\t\t\t\t\t\tStellungnahmen
\t\t\t\t\t</span>
\t\t\t\t\t
\t\t\t\t\t\tvon
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t
\t\t\t\t\t\t</strong>

\t\t\t\t</div>
                    <p>
                        {{ verfahren.inhalt }}
                    </p>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Karten</th>
\t\t\t\t\t\t\t\t<th>Formulare</th>
\t\t\t\t\t\t\t\t<th>Antrag</th>
\t\t\t\t\t\t\t\t<th>Information</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Auszuge</td>
\t\t\t\t\t\t\t\t<td><a href=\"https://www.dlr.rlp.de/Internet/lew/LEW_Verfahren.nsf/c47a098de8697f77c12582f10023db80?OpenForm&ParentUNID=1449B923025F1ADCC1257C5D000592DC&InheritParent=2\">Vollmacht</a></td>
\t\t\t\t\t\t\t\t<td><a href=\"https://www.dlr.rlp.de/Internet/lew/LEW_Verfahren.nsf/824ae548db9349bcc1257ef2004ecde8?OpenForm&ParentUNID=6F7DAB3DE35ADBADC125746000730018&InheritParent=2\">Antrag auf Abmarkung</a></td>
\t\t\t\t\t\t\t\t<td><a href=\"https://www.dlr.rlp.de/Internet/lew/LEW_Verfahren.nsf/dc23183df95bb797c1257eeb0049d409?OpenForm&ParentUNID=6F7DAB3DE35ADBADC125746000730018&InheritParent=2\">Vermessung und Abmarkung</a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t\t<td><a href=\"https://www.dlr.rlp.de/Internet/lew/LEW_Verfahren.nsf/47475a97d751c66ac1257f0000388eb8?OpenForm&ParentUNID=1449B923025F1ADCC1257C5D000592DC&InheritParent=2\">Erklärung</a></td>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Flurbereinigungsplan</td>
\t\t\t\t\t\t\t\t<td><a href=\"https://www.dlr.rlp.de/Internet/lew/LEW_Verfahren.nsf/764f2c8ac080e9ecc12581d2003bac39?OpenForm&ParentUNID=1449B923025F1ADCC1257C5D000592DC&InheritParent=2\">Empfangsvollmacht</a></td>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t\t<td>PDF-Datei</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            <p>
            {{ verfahren.ziel }}
            </p>
\t\t</article>
\t</section>
    {% if is_granted('ROLE_ADMIN') %}
        <a href=\"{{ path('verfahren_edit', { 'id' : verfahren.id } ) }}\" class=\"btn btn-success mt-5 mb-5\">ändern</a>
\t{% endif %}


\t<h2 class=\"mt-5 mb-5\">Die Stellungnahmen</h2>
\t<section id=\"comments\">
\t\t{%\tfor comment in verfahren.comments\t %}
\t\t\t<div class=\"comment\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"md-col-3\" style=\"color:red;\">
\t\t\t\t\t\t<h3>{{ comment.toeb }}</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t<small>{{ comment.createdAt | date('d.m.Y') }}
\t\t\t\t\t\t\tUm
\t\t\t\t\t\t\t{{ comment.createdAt | date('H:i') }}</small>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<p>{{ comment.einwendung  }}</p>
\t\t\t</div>

\t\t\t<hr>

\t\t{% endfor %}
\t</section>
    <hr>
    <section>
\t\t\t<h2>Einwendung schreiben
\t\t\t</h2>

\t\t\t{{ form_start(commentForm) }}
\t\t\t{{ form_widget(commentForm) }}

\t\t\t<button class=\"btn btn-success mt-5 mb-5\">
\t\t\t\tVerleger
\t\t\t</button>

\t\t\t{{ form_end(commentForm) }}
\t</section>
\t<hr>


{% endblock %}", "home/show.html.twig", "C:\\xampp\\htdocs\\symfony\\BodenordnungsVerfahren\\templates\\home\\show.html.twig");
    }
}
