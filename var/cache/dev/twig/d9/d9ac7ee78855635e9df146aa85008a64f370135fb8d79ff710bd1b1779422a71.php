<?php

/* SyliusAdminBundle::_notification.html.twig */
class __TwigTemplate_ef08b87cf225f026075617498e7231d490b6e485190be642f502ff4a7547b828 extends Twig_Template
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
        $__internal_4878a86eeec436586f36d61f69d6fd47d101b7f69628dad233406d7ca2a2e9e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4878a86eeec436586f36d61f69d6fd47d101b7f69628dad233406d7ca2a2e9e4->enter($__internal_4878a86eeec436586f36d61f69d6fd47d101b7f69628dad233406d7ca2a2e9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::_notification.html.twig"));

        $__internal_78819c220bfb613927c1dd3ef9a95a74588c1fa3d9c7039dc7e507de51ecc17c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78819c220bfb613927c1dd3ef9a95a74588c1fa3d9c7039dc7e507de51ecc17c->enter($__internal_78819c220bfb613927c1dd3ef9a95a74588c1fa3d9c7039dc7e507de51ecc17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::_notification.html.twig"));

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
        
        $__internal_4878a86eeec436586f36d61f69d6fd47d101b7f69628dad233406d7ca2a2e9e4->leave($__internal_4878a86eeec436586f36d61f69d6fd47d101b7f69628dad233406d7ca2a2e9e4_prof);

        
        $__internal_78819c220bfb613927c1dd3ef9a95a74588c1fa3d9c7039dc7e507de51ecc17c->leave($__internal_78819c220bfb613927c1dd3ef9a95a74588c1fa3d9c7039dc7e507de51ecc17c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle::_notification.html.twig";
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
", "SyliusAdminBundle::_notification.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/_notification.html.twig");
    }
}
