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

/* core/themes/seven/templates/media-library/fieldset--media-library-widget.html.twig */
class __TwigTemplate_56ec6d608bdf3961e05a2c79f30867377a5bf38ceb8c1da4afd02e61b9085f94 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 25, "if" => 46];
        $filters = ["escape" => 33];
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
        // line 25
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => "js-form-wrapper", 3 => "form-wrapper", 4 => "media-library-widget"];
        // line 33
        echo "<fieldset";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 35
        $context["legend_span_classes"] = [0 => "fieldset-legend", 1 => ((        // line 37
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((        // line 38
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 41
        echo "  ";
        // line 42
        echo "  <legend";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["legend"] ?? null), "attributes", [])), "html", null, true);
        echo ">
    <span";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["legend_span"] ?? null), "attributes", []), "addClass", [0 => ($context["legend_span_classes"] ?? null)], "method")), "html", null, true);
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["legend"] ?? null), "title", [])), "html", null, true);
        echo "</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 46
        if (($context["errors"] ?? null)) {
            // line 47
            echo "      <div class=\"form-item--error-message\">
        <strong>";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null)), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 51
        echo "    ";
        if ($this->getAttribute(($context["prefix"] ?? null), "empty_selection", [])) {
            // line 52
            echo "      <p class=\"media-library-widget-empty-text\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["prefix"] ?? null), "empty_selection", [])), "html", null, true);
            echo "</p>
    ";
        } elseif ($this->getAttribute(        // line 53
($context["prefix"] ?? null), "weight_toggle", [])) {
            // line 54
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["prefix"] ?? null), "weight_toggle", [])), "html", null, true);
            echo "
    ";
        }
        // line 56
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "
    ";
        // line 57
        if (($context["suffix"] ?? null)) {
            // line 58
            echo "      <span class=\"field-suffix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)), "html", null, true);
            echo "</span>
    ";
        }
        // line 60
        echo "    ";
        if ($this->getAttribute(($context["description"] ?? null), "content", [])) {
            // line 61
            echo "      <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => "description"], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "</div>
    ";
        }
        // line 63
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/media-library/fieldset--media-library-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 63,  124 => 61,  121 => 60,  115 => 58,  113 => 57,  108 => 56,  102 => 54,  100 => 53,  95 => 52,  92 => 51,  86 => 48,  83 => 47,  81 => 46,  73 => 43,  68 => 42,  66 => 41,  64 => 38,  63 => 37,  62 => 35,  57 => 33,  55 => 25,);
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
 * Theme override for the media library widget.
 *
 * Available variables:
 * - attributes: HTML attributes for the fieldset element.
 * - errors: (optional) Any errors for this fieldset element, may not be set.
 * - required: Boolean indicating whether the fieldeset element is required.
 * - legend: The legend element containing the following properties:
 *   - title: Title of the fieldset, intended for use as the text of the legend.
 *   - attributes: HTML attributes to apply to the legend.
 * - description: The description element containing the following properties:
 *   - content: The description content of the fieldset.
 *   - attributes: HTML attributes to apply to the description container.
 * - children: The rendered child elements of the fieldset.
 * - prefix: The content to add before the fieldset children.
 * - suffix: The content to add after the fieldset children.
 *
 * @see seven_preprocess_fieldset__media_library_widget()
 * @see template_preprocess_fieldset()
 */
#}
{%
  set classes = [
    'js-form-item',
    'form-item',
    'js-form-wrapper',
    'form-wrapper',
    'media-library-widget',
  ]
%}
<fieldset{{ attributes.addClass(classes) }}>
  {%
    set legend_span_classes = [
      'fieldset-legend',
      required ? 'js-form-required',
      required ? 'form-required',
    ]
  %}
  {#  Always wrap fieldset legends in a <span> for CSS positioning. #}
  <legend{{ legend.attributes }}>
    <span{{ legend_span.attributes.addClass(legend_span_classes) }}>{{ legend.title }}</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    {% if errors %}
      <div class=\"form-item--error-message\">
        <strong>{{ errors }}</strong>
      </div>
    {% endif %}
    {% if prefix.empty_selection %}
      <p class=\"media-library-widget-empty-text\">{{ prefix.empty_selection }}</p>
    {% elseif prefix.weight_toggle %}
      {{ prefix.weight_toggle }}
    {% endif %}
    {{ children }}
    {% if suffix %}
      <span class=\"field-suffix\">{{ suffix }}</span>
    {% endif %}
    {% if description.content %}
      <div{{ description.attributes.addClass('description') }}>{{ description.content }}</div>
    {% endif %}
  </div>
</fieldset>
", "core/themes/seven/templates/media-library/fieldset--media-library-widget.html.twig", "/Library/WebServer/Documents/wdark/principal-page/core/themes/seven/templates/media-library/fieldset--media-library-widget.html.twig");
    }
}
