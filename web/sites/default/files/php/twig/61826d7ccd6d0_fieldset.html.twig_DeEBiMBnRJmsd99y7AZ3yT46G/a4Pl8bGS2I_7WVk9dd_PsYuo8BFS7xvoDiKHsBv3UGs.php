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

/* themes/bootstrap_barrio/templates/form/fieldset.html.twig */
class __TwigTemplate_a26d0fce2832a8b1962bd85478578c6612a1034b808b4757c234f51ee8eca7e3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => "js-form-wrapper", 3 => "form-wrapper", 4 => "mb-3", 5 => ((        // line 30
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 33
        echo "<fieldset";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 33), 33, $this->source), "html", null, true);
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo ">
    <span";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 43), "addClass", [0 => ($context["legend_span_classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 46
        if (($context["errors"] ?? null)) {
            // line 47
            echo "      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 48, $this->source), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 51
        echo "    ";
        if (($context["prefix"] ?? null)) {
            // line 52
            echo "      <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 52, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 54
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 54, $this->source), "html", null, true);
        echo "
    ";
        // line 55
        if (($context["suffix"] ?? null)) {
            // line 56
            echo "      <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 56, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 58
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 58)) {
            // line 59
            echo "      <small";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 59), "addClass", [0 => "description", 1 => "text-muted"], "method", false, false, true, 59), 59, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "</small>
    ";
        }
        // line 61
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_barrio/templates/form/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 61,  102 => 59,  99 => 58,  93 => 56,  91 => 55,  86 => 54,  80 => 52,  77 => 51,  71 => 48,  68 => 47,  66 => 46,  58 => 43,  53 => 42,  51 => 41,  49 => 38,  48 => 37,  47 => 35,  42 => 33,  40 => 30,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a fieldset element and its children.
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
 * @see template_preprocess_fieldset()
 */
#}
{%
  set classes = [
    'js-form-item',
    'form-item',
    'js-form-wrapper',
    'form-wrapper',
    'mb-3',
    errors ? 'has-error',
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
  {#  Always wrap fieldset legends in a SPAN for CSS positioning. #}
  <legend{{ legend.attributes }}>
    <span{{ legend_span.attributes.addClass(legend_span_classes) }}>{{ legend.title }}</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    {% if errors %}
      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>{{ errors }}</strong>
      </div>
    {% endif %}
    {% if prefix %}
      <span class=\"field-prefix\">{{ prefix }}</span>
    {% endif %}
    {{ children }}
    {% if suffix %}
      <span class=\"field-suffix\">{{ suffix }}</span>
    {% endif %}
    {% if description.content %}
      <small{{ description.attributes.addClass('description', 'text-muted') }}>{{ description.content }}</small>
    {% endif %}
  </div>
</fieldset>
", "themes/bootstrap_barrio/templates/form/fieldset.html.twig", "/app/web/themes/bootstrap_barrio/templates/form/fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24, "if" => 46);
        static $filters = array("escape" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
