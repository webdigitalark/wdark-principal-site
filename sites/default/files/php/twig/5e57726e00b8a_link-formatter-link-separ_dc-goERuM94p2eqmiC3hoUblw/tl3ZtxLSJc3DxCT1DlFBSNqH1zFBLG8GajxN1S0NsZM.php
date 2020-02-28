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

/* themes/contrib/bootstrap_barrio/templates/field/link-formatter-link-separate.html.twig */
class __TwigTemplate_d92d16120da8d03d632aaaa83e5753672d9897a57ef9eb18ba0b20de6a45c093 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["spaceless" => 15, "if" => 17];
        $filters = ["escape" => 18];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if'],
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
        // line 15
        ob_start();
        // line 16
        echo "  <div class=\"link-item\">
    ";
        // line 17
        if (($context["title"] ?? null)) {
            // line 18
            echo "      <div class=\"link-title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</div>
    ";
        }
        // line 20
        echo "    <div class=\"link-url\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null)), "html", null, true);
        echo "</div>
  </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/field/link-formatter-link-separate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  62 => 18,  60 => 17,  57 => 16,  55 => 15,);
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
 * Theme override of a link with separate title and URL elements.
 *
 * Available variables:
 * - link: The link that has already been formatted by l().
 * - title: (optional) A descriptive or alternate title for the link, which may
 *   be different than the actual link text.
 *
 * @see template_preprocess()
 * @see template_preprocess_link_formatter_link_separate()
 */
#}
{% spaceless %}
  <div class=\"link-item\">
    {% if title %}
      <div class=\"link-title\">{{ title }}</div>
    {% endif %}
    <div class=\"link-url\">{{ link }}</div>
  </div>
{% endspaceless %}
", "themes/contrib/bootstrap_barrio/templates/field/link-formatter-link-separate.html.twig", "/Library/WebServer/Documents/wdark/principal-page/themes/contrib/bootstrap_barrio/templates/field/link-formatter-link-separate.html.twig");
    }
}
