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

/* core/themes/classy/templates/media-library/media--media-library.html.twig */
class __TwigTemplate_312b394d0e8c1294000abae5a382d1b4469c770ed5a94c5691429384d7bc2d1a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 42];
        $filters = ["escape" => 41, "without" => 44, "t" => 47];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without', 't'],
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
        // line 41
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  ";
        // line 42
        if (($context["content"] ?? null)) {
            // line 43
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["preview_attributes"] ?? null), "addClass", [0 => "media-library-item__preview js-media-library-item-preview"], "method")), "html", null, true);
            echo ">
      ";
            // line 44
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "name"), "html", null, true);
            echo "
    </div>
    ";
            // line 46
            if ( !($context["status"] ?? null)) {
                // line 47
                echo "      <div class=\"media-library-item__status\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("unpublished"));
                echo "</div>
    ";
            }
            // line 49
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["metadata_attributes"] ?? null), "addClass", [0 => "media-library-item__attributes"], "method")), "html", null, true);
            echo ">
      <div class=\"media-library-item__name\">
        ";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 55
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/media-library/media--media-library.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 55,  86 => 51,  80 => 49,  74 => 47,  72 => 46,  67 => 44,  62 => 43,  60 => 42,  55 => 41,);
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
 * Theme override of a media item in the media library.
 *
 * This is used for media that the user can select from the grid of media
 * items. It is not used for items that have already been selected in the
 * corresponding field widget, or for items that have been previously selected
 * before adding new media to the library.
 *
 * Available variables:
 * - media: The entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - entity.getEntityTypeId() will return the entity type ID.
 *   - entity.hasField('field_example') returns TRUE if the entity includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   Calling other methods, such as entity.delete(), will result in an exception.
 *   See \\Drupal\\Core\\Entity\\EntityInterface for a full list of methods.
 * - name: Name of the media.
 * - content: Media content.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - attributes: HTML attributes for the containing element.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - url: Direct URL of the media.
 * - preview_attributes: HTML attributes for the preview wrapper.
 * - metadata_attributes: HTML attributes for the expandable metadata area.
 * - status: Whether or not the Media is published.
 *
 * @see template_preprocess_media()
 *
 * @ingroup themeable
 */
#}
<article{{ attributes }}>
  {% if content %}
    <div{{ preview_attributes.addClass('media-library-item__preview js-media-library-item-preview') }}>
      {{ content|without('name') }}
    </div>
    {% if not status %}
      <div class=\"media-library-item__status\">{{ \"unpublished\" | t }}</div>
    {% endif %}
    <div{{ metadata_attributes.addClass('media-library-item__attributes') }}>
      <div class=\"media-library-item__name\">
        {{ name }}
      </div>
    </div>
  {% endif %}
</article>
", "core/themes/classy/templates/media-library/media--media-library.html.twig", "/Library/WebServer/Documents/wdark/principal-page/core/themes/classy/templates/media-library/media--media-library.html.twig");
    }
}
