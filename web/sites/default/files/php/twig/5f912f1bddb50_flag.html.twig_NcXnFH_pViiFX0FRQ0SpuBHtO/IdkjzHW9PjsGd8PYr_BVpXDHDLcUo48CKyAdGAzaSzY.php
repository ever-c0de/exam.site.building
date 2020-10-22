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

/* modules/contrib/flag/templates/flag.html.twig */
class __TwigTemplate_3de06cc012778fd6c14f8a4b9431daa6c3c6b4c2f019d2543df72a1bc101ca45 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["spaceless" => 17, "if" => 22, "set" => 23];
        $filters = ["escape" => 19, "clean_class" => 32, "join" => 41];
        $functions = ["attach_library" => 19];

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if', 'set'],
                ['escape', 'clean_class', 'join'],
                ['attach_library']
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/flag/templates/flag.html.twig"));

        // line 17
        ob_start();
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("flag/flag.link"), "html", null, true));
        echo "

";
        // line 22
        if ((($context["action"] ?? null) == "unflag")) {
            // line 23
            echo "    ";
            $context["action_class"] = "action-unflag";
        } else {
            // line 25
            echo "    ";
            $context["action_class"] = "action-flag";
        }
        // line 27
        echo "
";
        // line 30
        $context["classes"] = [0 => "flag", 1 => ("flag-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 32
($context["flag"] ?? null), "id", [], "method")))), 2 => ((("js-flag-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 33
($context["flag"] ?? null), "id", [], "method")))) . "-") . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["flaggable"] ?? null), "id", [], "method"))), 3 =>         // line 34
($context["action_class"] ?? null)];
        // line 37
        echo "
";
        // line 39
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "setAttribute", [0 => "rel", 1 => "nofollow"], "method");
        // line 40
        echo "
<div class=\"";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), " "), "html", null, true));
        echo "\"><a";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true));
        echo "</a></div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/flag/templates/flag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 41,  88 => 40,  86 => 39,  83 => 37,  81 => 34,  80 => 33,  79 => 32,  78 => 30,  75 => 27,  71 => 25,  67 => 23,  65 => 22,  60 => 19,  58 => 17,);
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
 * Default theme implementation for flag links.
 *
 * Available functions:
 * - flagcount(flag, flaggable) gets the number of flaggings for the given flag and flaggable.
 *
 * Available variables:
 * - attributes: HTML attributes for the link element.
 * - title: The flag link title.
 * - action: 'flag' or 'unflag'
 * - flag: The flag object.
 * - flaggable: The flaggable entity.
 */
#}
{% spaceless %}
{# Attach the flag CSS library.#}
{{ attach_library('flag/flag.link') }}

{# Depending on the flag action, set the appropriate action class. #}
{% if action == 'unflag' %}
    {% set action_class = 'action-unflag' %}
{% else %}
    {% set action_class = 'action-flag' %}
{% endif %}

{# Set the remaining Flag CSS classes. #}
{%
  set classes = [
    'flag',
    'flag-' ~ flag.id()|clean_class,
    'js-flag-' ~ flag.id()|clean_class ~ '-' ~ flaggable.id(),
    action_class
  ]
%}

{# Set nofollow to prevent search bots from crawling anonymous flag links #}
{% set attributes = attributes.setAttribute('rel', 'nofollow') %}

<div class=\"{{classes|join(' ')}}\"><a{{ attributes }}>{{ title }}</a></div>
{% endspaceless %}
", "modules/contrib/flag/templates/flag.html.twig", "/var/www/exam/web/modules/contrib/flag/templates/flag.html.twig");
    }
}
