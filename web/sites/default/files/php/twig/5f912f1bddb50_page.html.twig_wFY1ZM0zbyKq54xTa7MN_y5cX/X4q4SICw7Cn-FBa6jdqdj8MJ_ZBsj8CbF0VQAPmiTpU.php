<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/exam/templates/layout/page.html.twig */
class __TwigTemplate_4fb6d04892c7e36a72992fcdf9bf35dca51911fc934f4378f9080e996dc9b421 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 46, "if" => 62];
        $filters = ["escape" => 60];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/exam/templates/layout/page.html.twig"));

        // line 46
        $context["nav_classes"] = ((("navbar navbar-expand-lg" . (((        // line 47
($context["b4_navbar_schema"] ?? null) != "none")) ? ((" navbar-" . $this->sandbox->ensureToStringAllowed(($context["b4_navbar_schema"] ?? null)))) : (" "))) . (((        // line 48
($context["b4_navbar_schema"] ?? null) != "none")) ? ((((($context["b4_navbar_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 49
($context["b4_navbar_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b4_navbar_bg_schema"] ?? null)))) : (" ")));
        // line 51
        echo "
";
        // line 53
        $context["footer_classes"] = (((" " . (((        // line 54
($context["b4_footer_schema"] ?? null) != "none")) ? ((" footer-" . $this->sandbox->ensureToStringAllowed(($context["b4_footer_schema"] ?? null)))) : (" "))) . (((        // line 55
($context["b4_footer_schema"] ?? null) != "none")) ? ((((($context["b4_footer_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 56
($context["b4_footer_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b4_footer_bg_schema"] ?? null)))) : (" ")));
        // line 58
        echo "
<header>
  ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true));
        echo "

  ";
        // line 62
        if ((($this->getAttribute(($context["page"] ?? null), "nav_branding", []) || $this->getAttribute(($context["page"] ?? null), "nav_main", [])) || $this->getAttribute(($context["page"] ?? null), "nav_additional", []))) {
            // line 63
            echo "  <nav class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_classes"] ?? null)), "html", null, true));
            echo "\">
    <div class=\"";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b4_top_container"] ?? null)), "html", null, true));
            echo " row mx-auto\">
      <div class=\"col-auto p-0\">
      ";
            // line 66
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "nav_branding", [])), "html", null, true));
            echo "

      </div>

      <div class=\"col-3 col-md-auto p-0 text-right\">
        <button class=\"navbar-toggler collapsed \" type=\"button\" data-toggle=\"collapse\"
                data-target=\"#block-exam-main-navigation\" aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      </div>
";
            // line 78
            echo "      <div class=\"collapse navbar-collapse col-12 col-md-auto p-0 justify-content-end\" id=\"block-exam-main-navigation\">
        ";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "nav_main", [])), "html", null, true));
            echo "
        ";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "nav_additional", [])), "html", null, true));
            echo "
      </div>
    </div>
  </nav>
  ";
        }
        // line 85
        echo "  <div class=\"container\">
  ";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_bottom", [])), "html", null, true));
        echo "
  </div>
</header>



<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 96
        echo "  ";
        // line 97
        $context["sidebar_first_classes"] = ((($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 99
        echo "
  ";
        // line 101
        $context["sidebar_second_classes"] = ((($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 103
        echo "
  ";
        // line 105
        $context["content_classes"] = ((($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-12 col-lg-6") : (((($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) || $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-12 col-lg-9") : ("col-12"))));
        // line 107
        echo "

  <div class=\"";
        // line 109
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b4_top_container"] ?? null)), "html", null, true));
        echo "\">
    ";
        // line 110
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])) {
            // line 111
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true));
            echo "
    ";
        }
        // line 113
        echo "    <div class=\"row no-gutters\">
      ";
        // line 114
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 115
            echo "        <div class=\"order-2 order-lg-1 ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_classes"] ?? null)), "html", null, true));
            echo "\">
          ";
            // line 116
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 119
        echo "      <div class=\"order-1 order-lg-2 ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null)), "html", null, true));
        echo "\">
        ";
        // line 120
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true));
        echo "
      </div>
      ";
        // line 122
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 123
            echo "        <div class=\"order-3 ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_classes"] ?? null)), "html", null, true));
            echo "\">
          ";
            // line 124
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 127
        echo "    </div>
  </div>

</main>
";
        // line 131
        if ($this->getAttribute(($context["page"] ?? null), "projects_section", [])) {
            // line 132
            echo "
  <section class=\"projects_section\">
    ";
            // line 134
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "projects_section", [])), "html", null, true));
            echo "
  </section>

";
        }
        // line 138
        echo "
";
        // line 139
        if ($this->getAttribute(($context["page"] ?? null), "team_section", [])) {
            // line 140
            echo "  <section class=\"team_section\">
    <div class=\"container\">
      ";
            // line 142
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_section", [])), "html", null, true));
            echo "
    </div>
  </section>
";
        }
        // line 146
        echo "
";
        // line 147
        if ($this->getAttribute(($context["page"] ?? null), "news_section", [])) {
            // line 148
            echo "
  <section class=\"news_section\">
    ";
            // line 150
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "news_section", [])), "html", null, true));
            echo "
  </section>

";
        }
        // line 154
        echo "

";
        // line 156
        if ($this->getAttribute(($context["page"] ?? null), "clients_section", [])) {
            // line 157
            echo "  <section class=\"clients_section\">
    <div class=\"container\">
      ";
            // line 159
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients_section", [])), "html", null, true));
            echo "
    </div>
  </section>
";
        }
        // line 163
        echo "
";
        // line 164
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 165
            echo "<footer class=\"mt-auto ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null)), "html", null, true));
            echo "\">
  <div class=\"";
            // line 166
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b4_top_container"] ?? null)), "html", null, true));
            echo "\">
    ";
            // line 167
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true));
            echo "
  </div>
</footer>
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 167,  281 => 166,  276 => 165,  274 => 164,  271 => 163,  264 => 159,  260 => 157,  258 => 156,  254 => 154,  247 => 150,  243 => 148,  241 => 147,  238 => 146,  231 => 142,  227 => 140,  225 => 139,  222 => 138,  215 => 134,  211 => 132,  209 => 131,  203 => 127,  197 => 124,  192 => 123,  190 => 122,  185 => 120,  180 => 119,  174 => 116,  169 => 115,  167 => 114,  164 => 113,  158 => 111,  156 => 110,  152 => 109,  148 => 107,  146 => 105,  143 => 103,  141 => 101,  138 => 99,  136 => 97,  134 => 96,  124 => 86,  121 => 85,  113 => 80,  109 => 79,  106 => 78,  92 => 66,  87 => 64,  82 => 63,  80 => 62,  75 => 60,  71 => 58,  69 => 56,  68 => 55,  67 => 54,  66 => 53,  63 => 51,  61 => 49,  60 => 48,  59 => 47,  58 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{%
set nav_classes = 'navbar navbar-expand-lg' ~
  (b4_navbar_schema != 'none' ? \" navbar-#{b4_navbar_schema}\" : ' ') ~
  (b4_navbar_schema != 'none' ? (b4_navbar_schema == 'dark' ? ' text-light' : ' text-dark' ) : ' ') ~
  (b4_navbar_bg_schema != 'none' ? \" bg-#{b4_navbar_bg_schema}\" : ' ')
%}

{%
set footer_classes = ' ' ~
  (b4_footer_schema != 'none' ? \" footer-#{b4_footer_schema}\" : ' ') ~
  (b4_footer_schema != 'none' ? (b4_footer_schema == 'dark' ? ' text-light' : ' text-dark' ) : ' ') ~
  (b4_footer_bg_schema != 'none' ? \" bg-#{b4_footer_bg_schema}\" : ' ')
%}

<header>
  {{ page.header }}

  {% if page.nav_branding or page.nav_main or page.nav_additional %}
  <nav class=\"{{ nav_classes }}\">
    <div class=\"{{ b4_top_container }} row mx-auto\">
      <div class=\"col-auto p-0\">
      {{ page.nav_branding }}

      </div>

      <div class=\"col-3 col-md-auto p-0 text-right\">
        <button class=\"navbar-toggler collapsed \" type=\"button\" data-toggle=\"collapse\"
                data-target=\"#block-exam-main-navigation\" aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      </div>
{#navbar-collapsed collapsed collapse#}
      <div class=\"collapse navbar-collapse col-12 col-md-auto p-0 justify-content-end\" id=\"block-exam-main-navigation\">
        {{ page.nav_main }}
        {{ page.nav_additional }}
      </div>
    </div>
  </nav>
  {% endif %}
  <div class=\"container\">
  {{ page.header_bottom }}
  </div>
</header>



<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
{#  <div class=\"wrapper-background-1\"></div>
  <div class=\"wrapper-background-2\"></div>#}
  {%
  set sidebar_first_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-sm-6 col-lg-3' : 'col-12 col-lg-3'
  %}

  {%
  set sidebar_second_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-sm-6 col-lg-3' : 'col-12 col-lg-3'
  %}

  {%
  set content_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-lg-6' : ((page.sidebar_first or page.sidebar_second) ? 'col-12 col-lg-9' : 'col-12' )
   %}


  <div class=\"{{ b4_top_container }}\">
    {% if page.breadcrumb %}
      {{ page.breadcrumb }}
    {% endif %}
    <div class=\"row no-gutters\">
      {% if page.sidebar_first %}
        <div class=\"order-2 order-lg-1 {{ sidebar_first_classes }}\">
          {{ page.sidebar_first }}
        </div>
      {% endif %}
      <div class=\"order-1 order-lg-2 {{ content_classes }}\">
        {{ page.content }}
      </div>
      {% if page.sidebar_second %}
        <div class=\"order-3 {{ sidebar_second_classes }}\">
          {{ page.sidebar_second }}
        </div>
      {% endif %}
    </div>
  </div>

</main>
{% if page.projects_section  %}

  <section class=\"projects_section\">
    {{ page.projects_section }}
  </section>

{% endif %}

{% if page.team_section  %}
  <section class=\"team_section\">
    <div class=\"container\">
      {{ page.team_section }}
    </div>
  </section>
{% endif %}

{% if page.news_section  %}

  <section class=\"news_section\">
    {{ page.news_section }}
  </section>

{% endif %}


{% if page.clients_section  %}
  <section class=\"clients_section\">
    <div class=\"container\">
      {{ page.clients_section }}
    </div>
  </section>
{% endif %}

{% if page.footer %}
<footer class=\"mt-auto {{ footer_classes }}\">
  <div class=\"{{ b4_top_container }}\">
    {{ page.footer }}
  </div>
</footer>
{% endif %}
", "themes/custom/exam/templates/layout/page.html.twig", "/var/www/exam/web/themes/custom/exam/templates/layout/page.html.twig");
    }
}
