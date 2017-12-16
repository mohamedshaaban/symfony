<?php

/* @SyliusAdmin/Product/_slugField.html.twig */
class __TwigTemplate_af446788d1ed0de6cde2336ee8456eeef044722c81427d2d5f408870cb5ff30d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e749724dab477b7a4de925786e74f82263bdb0964c3a6c9f5d8f9bdddbf918e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e749724dab477b7a4de925786e74f82263bdb0964c3a6c9f5d8f9bdddbf918e8->enter($__internal_e749724dab477b7a4de925786e74f82263bdb0964c3a6c9f5d8f9bdddbf918e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/_slugField.html.twig"));

        $__internal_854125e464d4f20c72356a2d2e021defba8e367d87b0f537727e1c7b2daeaff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854125e464d4f20c72356a2d2e021defba8e367d87b0f537727e1c7b2daeaff4->enter($__internal_854125e464d4f20c72356a2d2e021defba8e367d87b0f537727e1c7b2daeaff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/_slugField.html.twig"));

        // line 1
        echo "<div class=\"";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 1, $this->getSourceContext()); })()), "vars", array()), "required", array())) {
            echo "required ";
        }
        echo "field";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 1, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo " error";
        }
        echo " ui loadable form\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 2, $this->getSourceContext()); })()), 'label');
        echo "
    ";
        // line 3
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 3, $this->getSourceContext()); })()), "vars", array()), "value", array()) == null)) {
            // line 4
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 4, $this->getSourceContext()); })()), 'widget', array("attr" => array("data-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_generate_product_slug"))));
            echo "
    ";
        } else {
            // line 6
            echo "    <div class=\"ui action input\">
        ";
            // line 7
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 7, $this->getSourceContext()); })()), 'widget', array("attr" => array("readonly" => "readonly", "data-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_generate_product_slug"))));
            echo "
        <span class=\"ui icon button toggle-product-slug-modification\">
            <i class=\"lock icon\"></i>
        </span>
    </div>
    ";
        }
        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 13, $this->getSourceContext()); })()), 'errors');
        echo "
</div>
";
        
        $__internal_e749724dab477b7a4de925786e74f82263bdb0964c3a6c9f5d8f9bdddbf918e8->leave($__internal_e749724dab477b7a4de925786e74f82263bdb0964c3a6c9f5d8f9bdddbf918e8_prof);

        
        $__internal_854125e464d4f20c72356a2d2e021defba8e367d87b0f537727e1c7b2daeaff4->leave($__internal_854125e464d4f20c72356a2d2e021defba8e367d87b0f537727e1c7b2daeaff4_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/_slugField.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  51 => 7,  48 => 6,  42 => 4,  40 => 3,  36 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"{% if slugField.vars.required %}required {% endif %}field{% if slugField.vars.errors|length > 0 %} error{% endif %} ui loadable form\">
    {{ form_label(slugField) }}
    {% if slugField.vars.value == null %}
        {{ form_widget(slugField, {'attr': {'data-url': path('sylius_admin_ajax_generate_product_slug')}}) }}
    {% else %}
    <div class=\"ui action input\">
        {{ form_widget(slugField, {'attr': {'readonly': 'readonly', 'data-url': path('sylius_admin_ajax_generate_product_slug')}}) }}
        <span class=\"ui icon button toggle-product-slug-modification\">
            <i class=\"lock icon\"></i>
        </span>
    </div>
    {% endif %}
    {{ form_errors(slugField) }}
</div>
", "@SyliusAdmin/Product/_slugField.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Product\\_slugField.html.twig");
    }
}
