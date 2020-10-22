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

/* themes/contrib/bootstrap4/templates/navigation/menu-local-task.html.twig */
class __TwigTemplate_2c0954f84cdd67402a7fbffa846186de17cde8ac22df02ddce37bf9802a8fe4e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 18, "if" => 25];
        $filters = ["escape" => 23, "t" => 27];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap4/templates/navigation/menu-local-task.html.twig"));

        // line 18
        $context["classes"] = [0 => "nav-item", 1 => ((        // line 20
($context["is_active"] ?? null)) ? ("nav-link active") : (""))];
        // line 23
        echo "<li";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true));
        echo ">
  ";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null)), "html", null, true));
        echo "
  ";
        // line 25
        if ((($context["is_active"] ?? null) && (($context["level"] ?? null) == "primary"))) {
            // line 26
            echo "    <a href=\"#\" class=\"tab-toggle dropdown-toggle\" data-drupal-nav-tabs-toggle aria-haspopup=\"true\" aria-expanded=\"false\">
      <span class=\"visually-hidden\">";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle tabs as a menu")));
            echo "</span>
    </a>
  ";
        }
        // line 30
        echo "</li>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap4/templates/navigation/menu-local-task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 30,  75 => 27,  72 => 26,  70 => 25,  66 => 24,  61 => 23,  59 => 20,  58 => 18,);
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
 * Theme override for a local task link.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper element.
 * - is_active: Whether the task item is an active tab.
 * - link: A rendered link element.
 *
 * Note: This template renders the content for each task item in
 * menu-local-tasks.html.twig.
 *
 * @see template_preprocess_menu_local_task()
 */
#}
{%
  set classes = [
    'nav-item',
    is_active ? 'nav-link active',
  ]
%}
<li{{ attributes.addClass(classes) }}>
  {{ link }}
  {% if is_active and level == 'primary' %}
    <a href=\"#\" class=\"tab-toggle dropdown-toggle\" data-drupal-nav-tabs-toggle aria-haspopup=\"true\" aria-expanded=\"false\">
      <span class=\"visually-hidden\">{{ 'Toggle tabs as a menu'|t }}</span>
    </a>
  {% endif %}
</li>
", "themes/contrib/bootstrap4/templates/navigation/menu-local-task.html.twig", "/var/www/exam/web/themes/contrib/bootstrap4/templates/navigation/menu-local-task.html.twig");
    }
}
