<?php

/* SyliusAdminBundle:ShippingCategory:_form.html.twig */
class __TwigTemplate_c0bb443705de85dc2e46e4203182d69f63a9c59bf078765eca9a2deaf2c061b6 extends Twig_Template
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
        $__internal_2db614ecf8af8b5d18a3a433513104b93cea6a77548e587861ca0c604fadbc9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db614ecf8af8b5d18a3a433513104b93cea6a77548e587861ca0c604fadbc9c->enter($__internal_2db614ecf8af8b5d18a3a433513104b93cea6a77548e587861ca0c604fadbc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ShippingCategory:_form.html.twig"));

        $__internal_dabbdc3c12ee014188571fadbaf88a73c80f8c5f849e4f76dbd9fb1374d641c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dabbdc3c12ee014188571fadbaf88a73c80f8c5f849e4f76dbd9fb1374d641c7->enter($__internal_dabbdc3c12ee014188571fadbaf88a73c80f8c5f849e4f76dbd9fb1374d641c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ShippingCategory:_form.html.twig"));

        // line 1
        echo "<div class=\"ui column stackable grid\">
    <div class=\"row\">
        <div class=\"column\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'errors');
        echo "
            <div class=\"two fields\">
                ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "name", array()), 'row');
        echo "
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"column\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "description", array()), 'row');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_2db614ecf8af8b5d18a3a433513104b93cea6a77548e587861ca0c604fadbc9c->leave($__internal_2db614ecf8af8b5d18a3a433513104b93cea6a77548e587861ca0c604fadbc9c_prof);

        
        $__internal_dabbdc3c12ee014188571fadbaf88a73c80f8c5f849e4f76dbd9fb1374d641c7->leave($__internal_dabbdc3c12ee014188571fadbaf88a73c80f8c5f849e4f76dbd9fb1374d641c7_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ShippingCategory:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  39 => 7,  35 => 6,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui column stackable grid\">
    <div class=\"row\">
        <div class=\"column\">
            {{ form_errors(form) }}
            <div class=\"two fields\">
                {{ form_row(form.code) }}
                {{ form_row(form.name) }}
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"column\">
            {{ form_row(form.description) }}
        </div>
    </div>
</div>
", "SyliusAdminBundle:ShippingCategory:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ShippingCategory/_form.html.twig");
    }
}
