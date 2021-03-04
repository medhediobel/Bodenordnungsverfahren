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

/* base.html.twig */
class __TwigTemplate_72271bccb69a2bcfa4532c288ec633bbef746340d2ac1ca8535ca5e3036c3772 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"de\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body style=\"font-family: 'Oswald', sans-serif;\">
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\" style=\"background-color: #871d33 !important;\">
\t\t\t<a class=\"navbar-brand\" href=\"https://www.dlr-westpfalz.rlp.de/Internet/global/inetcntr.nsf/dlr_web_full.xsp?src=0O54704D1F&p1=F5WP3T5VU3&p3=3Z459988T6&p4=88672NX0W4\">DLR Westpfalz</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t<ul class=\"navbar-nav mr-auto\">
                    
                   
            
\t\t\t\t\t";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Bodenordnungsverfahren</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"https://video-app-1814-3735-dev.twil.io?passcode=22600718143735\">Videokonferenz</a>
\t\t\t\t\t\t</li>


                        ";
            // line 36
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TOEB")) {
                // line 37
                echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Einwendung</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Anhörungstermin nach §41</a>
\t\t\t\t\t\t</li>
                        
                        ";
            }
            // line 45
            echo "
                        ";
            // line 46
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODO")) {
                // line 47
                echo "\t\t\t\t\t
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Widerspruch</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Vollmacht</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Anhörungstermin</a>
\t\t\t\t\t\t</li>
                        ";
            }
            // line 58
            echo "
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t";
            // line 61
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 62
                echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Kalender</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 66
            echo "
                    \t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Email</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t";
            // line 71
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 72
                echo "\t\t\t\t\t\t<li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
                // line 73
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verfahren_new");
                echo "\">Verfahren</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
                // line 76
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_benutzer");
                echo "\">Benutzer</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"";
                // line 79
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
                echo "\">Registrieren</a>
                        </li>

                    ";
            }
            // line 83
            echo "
                        <li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Abmelden</a>
\t\t\t\t\t\t</li>

                       
\t\t\t\t\t";
        } else {
            // line 90
            echo "
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Anmelden</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kontakt");
            echo "\">Kontakt</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 100
        echo "
\t\t\t</div>
\t\t</nav>
\t\t<br>





        <div class=\"container\">
        ";
        // line 110
        $this->displayBlock('body', $context, $blocks);
        // line 111
        echo "        </div>

\t\t";
        // line 113
        $this->displayBlock('footer', $context, $blocks);
        // line 159
        echo "
        ";
        // line 160
        $this->displayBlock('javascripts', $context, $blocks);
        // line 169
        echo "\t\t\t";
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "BodenordnungsVerfahren!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
\t\t\t<!-- Load Flashy default CSS -->
   \t\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">
\t\t
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 114
        echo "\t\t
\t\t\t
<footer class=\"footer mt-auto py-3 bg-light\">

  <div class=\"container mt-4\">
  \t\t<div class=\"row\">
  \t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t  <div class=\"container\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kontakt");
        echo "\">Kontakt</a>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Erklärung zur Barrierefreiheit</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"www.dlr.rlp.de\">www.dlr.rlp.de</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<span class=\"text-muted\">      </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
  
   \t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t   <div class=\"container\">
\t\t\t\t\t   <a class=\"nav-link active\" href=\"\">Impressum</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Sitemap</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Datenschutz</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<span class=\"text-muted\">    </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<br>
  \t</div>
  </div>
</footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 160
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 161
        echo "\t\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
\t\t\t<!-- Flashy depends on jQuery -->
\t\t\t\t<script src=\"//code.jquery.com/jquery.js\"></script>
\t\t\t<!-- Load Flashy default JavaScript -->
\t\t\t\t<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Include Flashy default partial -->
\t\t\t\t
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 165,  380 => 161,  370 => 160,  324 => 123,  313 => 114,  303 => 113,  284 => 110,  271 => 10,  265 => 8,  255 => 7,  236 => 6,  221 => 169,  219 => 160,  216 => 159,  214 => 113,  210 => 111,  208 => 110,  196 => 100,  189 => 96,  182 => 92,  178 => 90,  170 => 85,  166 => 83,  159 => 79,  153 => 76,  147 => 73,  144 => 72,  142 => 71,  135 => 66,  129 => 62,  127 => 61,  122 => 58,  109 => 47,  107 => 46,  104 => 45,  94 => 37,  92 => 36,  81 => 28,  77 => 26,  75 => 25,  61 => 13,  59 => 7,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"de\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}BodenordnungsVerfahren!{% endblock %}</title>
        {% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t\t<!-- Load Flashy default CSS -->
   \t\t\t<link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">
\t\t
\t\t{% endblock %}
    </head>
    <body style=\"font-family: 'Oswald', sans-serif;\">
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\" style=\"background-color: #871d33 !important;\">
\t\t\t<a class=\"navbar-brand\" href=\"https://www.dlr-westpfalz.rlp.de/Internet/global/inetcntr.nsf/dlr_web_full.xsp?src=0O54704D1F&p1=F5WP3T5VU3&p3=3Z459988T6&p4=88672NX0W4\">DLR Westpfalz</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t<ul class=\"navbar-nav mr-auto\">
                    
                   
            
\t\t\t\t\t{% if app.user %}

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"{{path('home') }}\">Bodenordnungsverfahren</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"https://video-app-1814-3735-dev.twil.io?passcode=22600718143735\">Videokonferenz</a>
\t\t\t\t\t\t</li>


                        {% if is_granted('ROLE_TOEB' ) %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Einwendung</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Anhörungstermin nach §41</a>
\t\t\t\t\t\t</li>
                        
                        {% endif %}

                        {% if is_granted('ROLE_MODO' ) %}
\t\t\t\t\t
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Widerspruch</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Vollmacht</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Anhörungstermin</a>
\t\t\t\t\t\t</li>
                        {% endif %}

\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Kalender</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}

                    \t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Email</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t<li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('verfahren_new') }}\">Verfahren</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('admin_benutzer') }}\">Benutzer</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"{{ path('app_register') }}\">Registrieren</a>
                        </li>

                    {% endif %}

                        <li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"{{ path('app_logout') }}\">Abmelden</a>
\t\t\t\t\t\t</li>

                       
\t\t\t\t\t{% else %}

\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"{{path('app_login') }}\">Anmelden</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"{{path('kontakt') }}\">Kontakt</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t{% endif %}

\t\t\t</div>
\t\t</nav>
\t\t<br>





        <div class=\"container\">
        {% block body %}       {% endblock %}
        </div>

\t\t{% block footer %}
\t\t
\t\t\t
<footer class=\"footer mt-auto py-3 bg-light\">

  <div class=\"container mt-4\">
  \t\t<div class=\"row\">
  \t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t  <div class=\"container\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"{{path('kontakt') }}\">Kontakt</a>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Erklärung zur Barrierefreiheit</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"www.dlr.rlp.de\">www.dlr.rlp.de</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<span class=\"text-muted\">      </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
  
   \t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t   <div class=\"container\">
\t\t\t\t\t   <a class=\"nav-link active\" href=\"\">Impressum</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Sitemap</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">Datenschutz</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<span class=\"text-muted\">    </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<br>
  \t</div>
  </div>
</footer>
{% endblock %}

        {% block javascripts %}
\t\t\t\t{{ encore_entry_script_tags('app') }}
\t\t\t<!-- Flashy depends on jQuery -->
\t\t\t\t<script src=\"//code.jquery.com/jquery.js\"></script>
\t\t\t<!-- Load Flashy default JavaScript -->
\t\t\t\t<script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
\t\t\t<!-- Include Flashy default partial -->
\t\t\t\t
\t\t{% endblock %}
\t\t\t{{ include('@MercurySeriesFlashy/flashy.html.twig') }}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\symfony\\BodenordnungsVerfahren\\templates\\base.html.twig");
    }
}
