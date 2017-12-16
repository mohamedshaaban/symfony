<?php

/* SyliusShopBundle:Common/Form:_countryCode.html.twig */
class __TwigTemplate_cf8e0dffc3b07f44fb62be0cf719de3a3da51f0c677801cd8f8dc25fb6e1e180 extends Twig_Template
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
        $__internal_b2c67ca884076b38747b119772da61f5679ea71199f2884b667fef354afd144c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c67ca884076b38747b119772da61f5679ea71199f2884b667fef354afd144c->enter($__internal_b2c67ca884076b38747b119772da61f5679ea71199f2884b667fef354afd144c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Form:_countryCode.html.twig"));

        $__internal_d9c906978967e040770e779917483fafbf045c9cfa168415efb5665fc23f47d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c906978967e040770e779917483fafbf045c9cfa168415efb5665fc23f47d0->enter($__internal_d9c906978967e040770e779917483fafbf045c9cfa168415efb5665fc23f47d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Form:_countryCode.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), "vars", array()), "choices", array())) == 1)) {
            // line 2
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'row', array("value" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), "vars", array()), "choices", array()), 0, array(), "array"), "value", array())));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'row');
            echo "
";
        }
        
        $__internal_b2c67ca884076b38747b119772da61f5679ea71199f2884b667fef354afd144c->leave($__internal_b2c67ca884076b38747b119772da61f5679ea71199f2884b667fef354afd144c_prof);

        
        $__internal_d9c906978967e040770e779917483fafbf045c9cfa168415efb5665fc23f47d0->leave($__internal_d9c906978967e040770e779917483fafbf045c9cfa168415efb5665fc23f47d0_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Form:_countryCode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form.vars.choices|length == 1 %}
    {{ form_row(form, {'value': form.vars.choices[0].value}) }}
{% else %}
    {{ form_row(form) }}
{% endif %}
", "SyliusShopBundle:Common/Form:_countryCode.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/Form/_countryCode.html.twig");
    }
}
