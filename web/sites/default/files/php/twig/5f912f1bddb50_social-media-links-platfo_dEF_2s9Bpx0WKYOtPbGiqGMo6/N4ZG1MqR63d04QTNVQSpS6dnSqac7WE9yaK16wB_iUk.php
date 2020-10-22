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

/* modules/contrib/social_media_links/templates/social-media-links-platforms.html.twig */
class __TwigTemplate_23d948a0d4be48c826e719a929844290ab0d67b1df9a525c14e1cc287e4b07a2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "for" => 16, "if" => 22];
        $filters = ["escape" => 15];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/social_media_links/templates/social-media-links-platforms.html.twig"));

        // line 6
        echo "
";
        // line 8
        $context["classes"] = [0 => "social-media-links--platforms", 1 => "platforms", 2 => ((($this->getAttribute(        // line 11
($context["appearance"] ?? null), "orientation", []) == "h")) ? ("inline horizontal") : ("vertical"))];
        // line 14
        echo "
<ul";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true));
        echo ">
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["platforms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 17
            echo "    <li>
      <a class=\"social-media-link-icon--";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["platform"], "id", [])), "html", null, true));
            echo "\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["platform"], "url", [])), "html", null, true));
            echo "\" ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["platform"], "attributes", [])), "html", null, true));
            echo " >
        ";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["platform"], "element", [])), "html", null, true));
            echo "
      </a>

      ";
            // line 22
            if ($this->getAttribute(($context["appearance"] ?? null), "show_name", [])) {
                // line 23
                echo "        ";
                if (($this->getAttribute(($context["appearance"] ?? null), "orientation", []) == "h")) {
                    // line 24
                    echo "          <br />
        ";
                }
                // line 26
                echo "
        <span><a class=\"social-media-link--";
                // line 27
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["platform"], "id", [])), "html", null, true));
                echo "\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["platform"], "url", [])), "html", null, true));
                echo "\" ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["platform"], "attributes", [])), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["platform"], "name", [])), "html", null, true));
                echo "</a></span>
      ";
            }
            // line 29
            echo "    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</ul>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/social_media_links/templates/social-media-links-platforms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 31,  115 => 29,  104 => 27,  101 => 26,  97 => 24,  94 => 23,  92 => 22,  86 => 19,  78 => 18,  75 => 17,  71 => 16,  67 => 15,  64 => 14,  62 => 11,  61 => 8,  58 => 6,);
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
 * @ingroup themeable
 */
#}

{%
  set classes = [
    'social-media-links--platforms',
    'platforms',
    appearance.orientation == 'h' ? 'inline horizontal' : 'vertical',
  ]
%}

<ul{{ attributes.addClass(classes) }}>
  {% for platform in platforms %}
    <li>
      <a class=\"social-media-link-icon--{{ platform.id }}\" href=\"{{ platform.url }}\" {{ platform.attributes }} >
        {{ platform.element }}
      </a>

      {% if appearance.show_name %}
        {% if appearance.orientation == 'h' %}
          <br />
        {% endif %}

        <span><a class=\"social-media-link--{{ platform.id }}\" href=\"{{ platform.url }}\" {{ platform.attributes }}>{{ platform.name }}</a></span>
      {% endif %}
    </li>
  {% endfor %}
</ul>
", "modules/contrib/social_media_links/templates/social-media-links-platforms.html.twig", "/var/www/exam/web/modules/contrib/social_media_links/templates/social-media-links-platforms.html.twig");
    }
}
