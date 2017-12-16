<?php

/* SyliusAdminBundle:AdminUser:_form.html.twig */
class __TwigTemplate_dee1266be5f67d69e9c3904817828b7bb8648ba11e4c42a1a96dca233ece5027 extends Twig_Template
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
        $__internal_af636a13543a9b33ca13b63c44ee182f03fd25a42803905902a193be0611ee08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af636a13543a9b33ca13b63c44ee182f03fd25a42803905902a193be0611ee08->enter($__internal_af636a13543a9b33ca13b63c44ee182f03fd25a42803905902a193be0611ee08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:AdminUser:_form.html.twig"));

        $__internal_e1e6728f3a020d6298885d16bc06cad460b9233cb544e20b1866111536671278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e6728f3a020d6298885d16bc06cad460b9233cb544e20b1866111536671278->enter($__internal_e1e6728f3a020d6298885d16bc06cad460b9233cb544e20b1866111536671278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:AdminUser:_form.html.twig"));

        // line 1
        echo "<div class=\"ui two column stackable grid\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'errors');
        echo "
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.general_info"), "html", null, true);
        echo "</h4>
            <div class=\"two fields\">
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "username", array()), 'row');
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "email", array()), 'row');
        echo "
            </div>
        </div>
        <div class=\"ui segment\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "plainPassword", array()), 'row');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "enabled", array()), 'row');
        echo "
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.additional_information"), "html", null, true);
        echo "</h4>
            <div class=\"two fields\">
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "firstName", array()), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "lastName", array()), 'row');
        echo "
            </div>
        </div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.preferences"), "html", null, true);
        echo "</h4>
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "localeCode", array()), 'row');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_af636a13543a9b33ca13b63c44ee182f03fd25a42803905902a193be0611ee08->leave($__internal_af636a13543a9b33ca13b63c44ee182f03fd25a42803905902a193be0611ee08_prof);

        
        $__internal_e1e6728f3a020d6298885d16bc06cad460b9233cb544e20b1866111536671278->leave($__internal_e1e6728f3a020d6298885d16bc06cad460b9233cb544e20b1866111536671278_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:AdminUser:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  78 => 25,  71 => 21,  67 => 20,  62 => 18,  54 => 13,  50 => 12,  43 => 8,  39 => 7,  34 => 5,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui two column stackable grid\">
    {{ form_errors(form) }}
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.general_info'|trans }}</h4>
            <div class=\"two fields\">
                {{ form_row(form.username) }}
                {{ form_row(form.email) }}
            </div>
        </div>
        <div class=\"ui segment\">
            {{ form_row(form.plainPassword) }}
            {{ form_row(form.enabled) }}
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.additional_information'|trans }}</h4>
            <div class=\"two fields\">
                {{ form_row(form.firstName) }}
                {{ form_row(form.lastName) }}
            </div>
        </div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.preferences'|trans }}</h4>
            {{ form_row(form.localeCode) }}
        </div>
    </div>
</div>
", "SyliusAdminBundle:AdminUser:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/AdminUser/_form.html.twig");
    }
}
