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

/* modules/contrib/views_fieldsets/views-fieldsets-fieldset.html.twig */
class __TwigTemplate_763bb987170d797f3a09b99997d01b6287848a9734ebc8a4aafa7a646c33541a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "include" => 5];
        $filters = ["escape" => 1];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
        // line 1
        echo "<fieldset class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), "html", null, true);
        echo " ";
        if (($context["collapsed"] ?? null)) {
            echo "collapsed";
        }
        echo "\">
  ";
        // line 2
        if (($context["legend"] ?? null)) {
            // line 3
            echo "    <legend>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["legend"] ?? null)), "html", null, true);
            echo "</legend>
  ";
        }
        // line 5
        echo "  ";
        $this->loadTemplate("views-view-fields.html.twig", "modules/contrib/views_fieldsets/views-fieldsets-fieldset.html.twig", 5)->display($context);
        // line 6
        echo "</fieldset>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/views_fieldsets/views-fieldsets-fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 6,  72 => 5,  66 => 3,  64 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<fieldset class=\"{{ classes }} {% if collapsed %}collapsed{% endif %}\">
  {% if legend %}
    <legend>{{ legend }}</legend>
  {% endif %}
  {% include 'views-view-fields.html.twig' %}
</fieldset>
", "modules/contrib/views_fieldsets/views-fieldsets-fieldset.html.twig", "/Library/WebServer/Documents/wdark/principal-page/modules/contrib/views_fieldsets/views-fieldsets-fieldset.html.twig");
    }
}
