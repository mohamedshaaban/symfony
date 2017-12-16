<?php

/* SyliusAdminBundle:Macro:breadcrumb.html.twig */
class __TwigTemplate_4a17f4468aa57a14dfd3f2c7977027ee974f02ec453be6a214e312a6d9b16995 extends Twig_Template
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
        $__internal_b3521ad94854697454914073d21bc5bd9410ac349913a74df2fa519f16193e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3521ad94854697454914073d21bc5bd9410ac349913a74df2fa519f16193e61->enter($__internal_b3521ad94854697454914073d21bc5bd9410ac349913a74df2fa519f16193e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Macro:breadcrumb.html.twig"));

        $__internal_8cf71fdb3ddc76c033b8926381518962a96dda13008ef379b58d296be234df45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf71fdb3ddc76c033b8926381518962a96dda13008ef379b58d296be234df45->enter($__internal_8cf71fdb3ddc76c033b8926381518962a96dda13008ef379b58d296be234df45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Macro:breadcrumb.html.twig"));

        
        $__internal_b3521ad94854697454914073d21bc5bd9410ac349913a74df2fa519f16193e61->leave($__internal_b3521ad94854697454914073d21bc5bd9410ac349913a74df2fa519f16193e61_prof);

        
        $__internal_8cf71fdb3ddc76c033b8926381518962a96dda13008ef379b58d296be234df45->leave($__internal_8cf71fdb3ddc76c033b8926381518962a96dda13008ef379b58d296be234df45_prof);

    }

    // line 1
    public function macro_crumble($__crumbs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "crumbs" => $__crumbs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d208dcb94931c98f62d6bdaec82bb3625159ab5fb7589098fcbe319d32e6b777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d208dcb94931c98f62d6bdaec82bb3625159ab5fb7589098fcbe319d32e6b777->enter($__internal_d208dcb94931c98f62d6bdaec82bb3625159ab5fb7589098fcbe319d32e6b777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "crumble"));

            $__internal_569f12dbb3bd68880d267cc8fe3543ef3761ae9b31166f563a9dc716ede69c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_569f12dbb3bd68880d267cc8fe3543ef3761ae9b31166f563a9dc716ede69c3f->enter($__internal_569f12dbb3bd68880d267cc8fe3543ef3761ae9b31166f563a9dc716ede69c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "crumble"));

            // line 2
            echo "    ";
            $context["_breadcrumb"] = $this->loadTemplate("@SyliusUi/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Macro:breadcrumb.html.twig", 2);
            // line 3
            echo "
    ";
            // line 4
            echo $context["_breadcrumb"]->macro_crumble((isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new Twig_Error_Runtime('Variable "crumbs" does not exist.', 4, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"));
            echo "
";
            
            $__internal_569f12dbb3bd68880d267cc8fe3543ef3761ae9b31166f563a9dc716ede69c3f->leave($__internal_569f12dbb3bd68880d267cc8fe3543ef3761ae9b31166f563a9dc716ede69c3f_prof);

            
            $__internal_d208dcb94931c98f62d6bdaec82bb3625159ab5fb7589098fcbe319d32e6b777->leave($__internal_d208dcb94931c98f62d6bdaec82bb3625159ab5fb7589098fcbe319d32e6b777_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Macro:breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 4,  54 => 3,  51 => 2,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro crumble(crumbs = {}) %}
    {% import '@SyliusUi/Macro/breadcrumb.html.twig' as _breadcrumb %}

    {{ _breadcrumb.crumble(crumbs, path('sylius_admin_dashboard'), 'sylius.ui.administration'|trans) }}
{% endmacro %}
", "SyliusAdminBundle:Macro:breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Macro/breadcrumb.html.twig");
    }
}
