<?php

/* FOSOAuthServerBundle::form.html.twig */
class __TwigTemplate_3707aac0b65964b11fa2d0e03fd858231cf80dfc52de64281c271afc86494e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eadbffbd4852b6c9381b263e00178ac7f2791c1b5d46cc89cfd8b46eeda8652c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eadbffbd4852b6c9381b263e00178ac7f2791c1b5d46cc89cfd8b46eeda8652c->enter($__internal_eadbffbd4852b6c9381b263e00178ac7f2791c1b5d46cc89cfd8b46eeda8652c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle::form.html.twig"));

        $__internal_16d971b9c393fb8da7289e0123dbe09d14c718a59a1d8f45f5f382b3e765daf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d971b9c393fb8da7289e0123dbe09d14c718a59a1d8f45f5f382b3e765daf4->enter($__internal_16d971b9c393fb8da7289e0123dbe09d14c718a59a1d8f45f5f382b3e765daf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle::form.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('field_label', $context, $blocks);
        
        $__internal_eadbffbd4852b6c9381b263e00178ac7f2791c1b5d46cc89cfd8b46eeda8652c->leave($__internal_eadbffbd4852b6c9381b263e00178ac7f2791c1b5d46cc89cfd8b46eeda8652c_prof);

        
        $__internal_16d971b9c393fb8da7289e0123dbe09d14c718a59a1d8f45f5f382b3e765daf4->leave($__internal_16d971b9c393fb8da7289e0123dbe09d14c718a59a1d8f45f5f382b3e765daf4_prof);

    }

    public function block_field_label($context, array $blocks = array())
    {
        $__internal_99a64be551ad2150d1bea7f8a2f07881fcdff459dc0ba0112e25aaf037d79360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a64be551ad2150d1bea7f8a2f07881fcdff459dc0ba0112e25aaf037d79360->enter($__internal_99a64be551ad2150d1bea7f8a2f07881fcdff459dc0ba0112e25aaf037d79360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_label"));

        $__internal_9234896646ce5b155bdd378aca71d287828ca1964a1692d5ba6bbcf276e72bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9234896646ce5b155bdd378aca71d287828ca1964a1692d5ba6bbcf276e72bb9->enter($__internal_9234896646ce5b155bdd378aca71d287828ca1964a1692d5ba6bbcf276e72bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_label"));

        // line 3
        ob_start();
        // line 4
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 4, $this->getSourceContext()); })()), array(), "FOSOAuthServerBundle"), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9234896646ce5b155bdd378aca71d287828ca1964a1692d5ba6bbcf276e72bb9->leave($__internal_9234896646ce5b155bdd378aca71d287828ca1964a1692d5ba6bbcf276e72bb9_prof);

        
        $__internal_99a64be551ad2150d1bea7f8a2f07881fcdff459dc0ba0112e25aaf037d79360->leave($__internal_99a64be551ad2150d1bea7f8a2f07881fcdff459dc0ba0112e25aaf037d79360_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle::form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  47 => 3,  29 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block field_label %}
{% spaceless %}
    <label for=\"{{ id }}\">{{ id|trans([], 'FOSOAuthServerBundle') }}</label>
{% endspaceless %}
{% endblock field_label %}
", "FOSOAuthServerBundle::form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\friendsofsymfony\\oauth-server-bundle/Resources/views/form.html.twig");
    }
}
