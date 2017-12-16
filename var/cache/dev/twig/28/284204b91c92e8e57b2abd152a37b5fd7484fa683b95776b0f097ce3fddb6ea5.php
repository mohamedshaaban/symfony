<?php

/* SyliusAdminBundle:Common/Form:_address.html.twig */
class __TwigTemplate_2fc92aeb8f9cdb2c356ef468ad27b4802850de8a2c7c73ae74d97953d2791d3b extends Twig_Template
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
        $__internal_398a3d9016567b98207d6fe52471eb551f6fdf4b9d50dfadecce1ce5d15aba73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398a3d9016567b98207d6fe52471eb551f6fdf4b9d50dfadecce1ce5d15aba73->enter($__internal_398a3d9016567b98207d6fe52471eb551f6fdf4b9d50dfadecce1ce5d15aba73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common/Form:_address.html.twig"));

        $__internal_62088026439d6abde5e1916703a2f5c7d3c7ca231a8e762465e53d0cc76626a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62088026439d6abde5e1916703a2f5c7d3c7ca231a8e762465e53d0cc76626a8->enter($__internal_62088026439d6abde5e1916703a2f5c7d3c7ca231a8e762465e53d0cc76626a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common/Form:_address.html.twig"));

        // line 1
        echo "<div class=\"two fields\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), "firstName", array()), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "lastName", array()), 'row');
        echo "
</div>
";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "company", array()), 'row');
        echo "
";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "street", array()), 'row');
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "countryCode", array()), 'row');
        echo "
<div class=\"province-container field\" data-url=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_render_province_form");
        echo "\">
    ";
        // line 9
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "provinceCode", array(), "any", true, true)) {
            // line 10
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "provinceCode", array()), 'row', array("attr" => array("class" => "ui dropdown")));
            echo "
    ";
        }
        // line 12
        echo "</div>
<div class=\"two fields\">
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "city", array()), 'row');
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "postcode", array()), 'row');
        echo "
</div>
";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "phoneNumber", array()), 'row');
        echo "
";
        
        $__internal_398a3d9016567b98207d6fe52471eb551f6fdf4b9d50dfadecce1ce5d15aba73->leave($__internal_398a3d9016567b98207d6fe52471eb551f6fdf4b9d50dfadecce1ce5d15aba73_prof);

        
        $__internal_62088026439d6abde5e1916703a2f5c7d3c7ca231a8e762465e53d0cc76626a8->leave($__internal_62088026439d6abde5e1916703a2f5c7d3c7ca231a8e762465e53d0cc76626a8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Common/Form:_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  69 => 15,  65 => 14,  61 => 12,  55 => 10,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"two fields\">
    {{ form_row(form.firstName) }}
    {{ form_row(form.lastName) }}
</div>
{{ form_row(form.company) }}
{{ form_row(form.street) }}
{{ form_row(form.countryCode) }}
<div class=\"province-container field\" data-url=\"{{ path('sylius_admin_ajax_render_province_form') }}\">
    {% if form.provinceCode is defined %}
        {{ form_row(form.provinceCode, {'attr': {'class': 'ui dropdown'}}) }}
    {% endif %}
</div>
<div class=\"two fields\">
    {{ form_row(form.city) }}
    {{ form_row(form.postcode) }}
</div>
{{ form_row(form.phoneNumber) }}
", "SyliusAdminBundle:Common/Form:_address.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Common/Form/_address.html.twig");
    }
}
