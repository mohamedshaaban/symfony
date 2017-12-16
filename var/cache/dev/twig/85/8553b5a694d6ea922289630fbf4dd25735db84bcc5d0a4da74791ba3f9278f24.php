<?php

/* @SyliusAdmin/_notification.html.twig */
class __TwigTemplate_7a34992c1833b3ff78b13fe1c239bb383c4c151934c1c341ca6862e5c26aaedd extends Twig_Template
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
        $__internal_20b0690f343d859a0392ea96c6e921c1182b62a9bf6eb89f1f14b3514e190fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20b0690f343d859a0392ea96c6e921c1182b62a9bf6eb89f1f14b3514e190fc2->enter($__internal_20b0690f343d859a0392ea96c6e921c1182b62a9bf6eb89f1f14b3514e190fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/_notification.html.twig"));

        $__internal_2ac11cae1a96b69bf6443fca9dc76754344200619b983d3b067935f20942ba84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac11cae1a96b69bf6443fca9dc76754344200619b983d3b067935f20942ba84->enter($__internal_2ac11cae1a96b69bf6443fca9dc76754344200619b983d3b067935f20942ba84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/_notification.html.twig"));

        // line 1
        echo "<div class=\"ui floated simple dropdown icon item\" id=\"sylius-version-notification\" data-frequency=\"";
        echo twig_escape_filter($this->env, (isset($context["frequency"]) || array_key_exists("frequency", $context) ? $context["frequency"] : (function () { throw new Twig_Error_Runtime('Variable "frequency" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\" data-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_get_version");
        echo "\" data-current-version=\"";
        echo twig_escape_filter($this->env, (isset($context["currentVersion"]) || array_key_exists("currentVersion", $context) ? $context["currentVersion"] : (function () { throw new Twig_Error_Runtime('Variable "currentVersion" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
    <i class=\"outline bell icon\"></i>
    <div class=\"menu\">
        <div class=\"ui message\" id=\"no-notifications\">
            <span>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_new_notifications"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"ui message\" id=\"notifications\">
            <span>
                ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.there_is_a_new_version_of_sylius_available"), "html", null, true);
        echo "
                <i class=\"remove link icon\" data-dismiss style=\"margin-left: 1em; margin-right: -0.5em;\"></i>
            </span>
            <br/>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.contact_your_technician_to_upgrade"), "html", null, true);
        echo "</span>
        </div>
    </div>
</div>
";
        
        $__internal_20b0690f343d859a0392ea96c6e921c1182b62a9bf6eb89f1f14b3514e190fc2->leave($__internal_20b0690f343d859a0392ea96c6e921c1182b62a9bf6eb89f1f14b3514e190fc2_prof);

        
        $__internal_2ac11cae1a96b69bf6443fca9dc76754344200619b983d3b067935f20942ba84->leave($__internal_2ac11cae1a96b69bf6443fca9dc76754344200619b983d3b067935f20942ba84_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/_notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  44 => 9,  37 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui floated simple dropdown icon item\" id=\"sylius-version-notification\" data-frequency=\"{{ frequency }}\" data-url=\"{{ path('sylius_admin_ajax_get_version') }}\" data-current-version=\"{{ currentVersion }}\">
    <i class=\"outline bell icon\"></i>
    <div class=\"menu\">
        <div class=\"ui message\" id=\"no-notifications\">
            <span>{{ 'sylius.ui.no_new_notifications'|trans }}</span>
        </div>
        <div class=\"ui message\" id=\"notifications\">
            <span>
                {{ 'sylius.ui.there_is_a_new_version_of_sylius_available'|trans }}
                <i class=\"remove link icon\" data-dismiss style=\"margin-left: 1em; margin-right: -0.5em;\"></i>
            </span>
            <br/>
            <span>{{ 'sylius.ui.contact_your_technician_to_upgrade'|trans }}</span>
        </div>
    </div>
</div>
", "@SyliusAdmin/_notification.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\_notification.html.twig");
    }
}
