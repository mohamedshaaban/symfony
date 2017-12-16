<?php

/* SyliusAdminBundle:Shipment/Partial:_ship.html.twig */
class __TwigTemplate_a0c5bf4d3aa851802ebb1e5dd34fd4c0ff9e9234fc219ba32de8468211f1aad5 extends Twig_Template
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
        $__internal_ce5fd7d50abae022ed85554e0b6353858a0b33ff569b4b940e799db1051edb97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce5fd7d50abae022ed85554e0b6353858a0b33ff569b4b940e799db1051edb97->enter($__internal_ce5fd7d50abae022ed85554e0b6353858a0b33ff569b4b940e799db1051edb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Shipment/Partial:_ship.html.twig"));

        $__internal_705015310172fe2008798916d38215bdde9a4f33d83feae538865f3c7ecc2df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705015310172fe2008798916d38215bdde9a4f33d83feae538865f3c7ecc2df9->enter($__internal_705015310172fe2008798916d38215bdde9a4f33d83feae538865f3c7ecc2df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Shipment/Partial:_ship.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_shipment_ship", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 2, $this->getSourceContext()); })()), "vars", array()), "route", array()), "parameters", array())), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    <div class=\"ui fluid action input\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "tracking", array()), 'widget', array("attr" => array("placeholder" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.tracking_code") . "..."))));
        echo "
        <button type=\"submit\" class=\"ui labeled icon teal button\"><i class=\"plane icon\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.ship"), "html", null, true);
        echo "</button>
    </div>
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_ce5fd7d50abae022ed85554e0b6353858a0b33ff569b4b940e799db1051edb97->leave($__internal_ce5fd7d50abae022ed85554e0b6353858a0b33ff569b4b940e799db1051edb97_prof);

        
        $__internal_705015310172fe2008798916d38215bdde9a4f33d83feae538865f3c7ecc2df9->leave($__internal_705015310172fe2008798916d38215bdde9a4f33d83feae538865f3c7ecc2df9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Shipment/Partial:_ship.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  43 => 8,  38 => 6,  34 => 5,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    {{ form_start(form, {'action': path('sylius_admin_order_shipment_ship', configuration.vars.route.parameters), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    <div class=\"ui fluid action input\">
        {{ form_widget(form.tracking, {'attr': {'placeholder': 'sylius.ui.tracking_code'|trans ~ '...'}}) }}
        <button type=\"submit\" class=\"ui labeled icon teal button\"><i class=\"plane icon\"></i> {{ 'sylius.ui.ship'|trans }}</button>
    </div>
    {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}
</div>
", "SyliusAdminBundle:Shipment/Partial:_ship.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Shipment/Partial/_ship.html.twig");
    }
}
