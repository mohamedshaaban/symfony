<?php

/* @SyliusAdmin/Macro/breadcrumb.html.twig */
class __TwigTemplate_4353a5487ed9dc8032c5bf8456178646e355fc247e819d1096b38393d63cd226 extends Twig_Template
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
        $__internal_9836bf7154aba1c113a60996061676e7a41f5909683e896e1b16a524eb874398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9836bf7154aba1c113a60996061676e7a41f5909683e896e1b16a524eb874398->enter($__internal_9836bf7154aba1c113a60996061676e7a41f5909683e896e1b16a524eb874398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Macro/breadcrumb.html.twig"));

        $__internal_50c403b2cc3cee5f66583906f0a6b186d927d175090f38eaf02c1779bcfa1292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c403b2cc3cee5f66583906f0a6b186d927d175090f38eaf02c1779bcfa1292->enter($__internal_50c403b2cc3cee5f66583906f0a6b186d927d175090f38eaf02c1779bcfa1292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Macro/breadcrumb.html.twig"));

        
        $__internal_9836bf7154aba1c113a60996061676e7a41f5909683e896e1b16a524eb874398->leave($__internal_9836bf7154aba1c113a60996061676e7a41f5909683e896e1b16a524eb874398_prof);

        
        $__internal_50c403b2cc3cee5f66583906f0a6b186d927d175090f38eaf02c1779bcfa1292->leave($__internal_50c403b2cc3cee5f66583906f0a6b186d927d175090f38eaf02c1779bcfa1292_prof);

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
            $__internal_8d970249478a6299a7ea0c10d5ab71ba33bfec00f9a3d703912b632b4c11a983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_8d970249478a6299a7ea0c10d5ab71ba33bfec00f9a3d703912b632b4c11a983->enter($__internal_8d970249478a6299a7ea0c10d5ab71ba33bfec00f9a3d703912b632b4c11a983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "crumble"));

            $__internal_48dc4b7bc4889b512a0058c81b30dd2e4f7dcd613287f7658a5d2af708df4077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_48dc4b7bc4889b512a0058c81b30dd2e4f7dcd613287f7658a5d2af708df4077->enter($__internal_48dc4b7bc4889b512a0058c81b30dd2e4f7dcd613287f7658a5d2af708df4077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "crumble"));

            // line 2
            echo "    ";
            $context["_breadcrumb"] = $this->loadTemplate("@SyliusUi/Macro/breadcrumb.html.twig", "@SyliusAdmin/Macro/breadcrumb.html.twig", 2);
            // line 3
            echo "
    ";
            // line 4
            echo $context["_breadcrumb"]->macro_crumble((isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new Twig_Error_Runtime('Variable "crumbs" does not exist.', 4, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"));
            echo "
";
            
            $__internal_48dc4b7bc4889b512a0058c81b30dd2e4f7dcd613287f7658a5d2af708df4077->leave($__internal_48dc4b7bc4889b512a0058c81b30dd2e4f7dcd613287f7658a5d2af708df4077_prof);

            
            $__internal_8d970249478a6299a7ea0c10d5ab71ba33bfec00f9a3d703912b632b4c11a983->leave($__internal_8d970249478a6299a7ea0c10d5ab71ba33bfec00f9a3d703912b632b4c11a983_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Macro/breadcrumb.html.twig";
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
", "@SyliusAdmin/Macro/breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Macro\\breadcrumb.html.twig");
    }
}
