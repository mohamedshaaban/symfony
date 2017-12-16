<?php

/* @SyliusAdmin/ProductAttribute/Grid/Action/create.html.twig */
class __TwigTemplate_5dedc4f7367423f1c2a75a2bd9232e69660b52e2ac8549bb9d64c52d72d56949 extends Twig_Template
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
        $__internal_4218bbc1004b20705f5af9f9c3dcee20223f88b345d6c7952032981b9bff9d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4218bbc1004b20705f5af9f9c3dcee20223f88b345d6c7952032981b9bff9d90->enter($__internal_4218bbc1004b20705f5af9f9c3dcee20223f88b345d6c7952032981b9bff9d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/ProductAttribute/Grid/Action/create.html.twig"));

        $__internal_db22c1e8b4ba1b41653b8f134d6a208a414943b9c315a5bb4215d9679fc4d571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db22c1e8b4ba1b41653b8f134d6a208a414943b9c315a5bb4215d9679fc4d571->enter($__internal_db22c1e8b4ba1b41653b8f134d6a208a414943b9c315a5bb4215d9679fc4d571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/ProductAttribute/Grid/Action/create.html.twig"));

        // line 1
        echo "<div class=\"ui labeled icon top right floating dropdown button primary link\">
    <i class=\"plus icon\"></i>
    <span class=\"text\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create"), "html", null, true);
        echo "</span>
    <div class=\"menu\">
        <div class=\"header\">
            <i class=\"cube icon\"></i>
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.type"), "html", null, true);
        echo "
        </div>
        <div class=\"divider\"></div>
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_get_attribute_types"));
        echo "
    </div>
</div>
";
        
        $__internal_4218bbc1004b20705f5af9f9c3dcee20223f88b345d6c7952032981b9bff9d90->leave($__internal_4218bbc1004b20705f5af9f9c3dcee20223f88b345d6c7952032981b9bff9d90_prof);

        
        $__internal_db22c1e8b4ba1b41653b8f134d6a208a414943b9c315a5bb4215d9679fc4d571->leave($__internal_db22c1e8b4ba1b41653b8f134d6a208a414943b9c315a5bb4215d9679fc4d571_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/ProductAttribute/Grid/Action/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  36 => 7,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui labeled icon top right floating dropdown button primary link\">
    <i class=\"plus icon\"></i>
    <span class=\"text\">{{ 'sylius.ui.create'|trans }}</span>
    <div class=\"menu\">
        <div class=\"header\">
            <i class=\"cube icon\"></i>
            {{ 'sylius.ui.type'|trans }}
        </div>
        <div class=\"divider\"></div>
        {{ render(url('sylius_admin_get_attribute_types')) }}
    </div>
</div>
", "@SyliusAdmin/ProductAttribute/Grid/Action/create.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\ProductAttribute\\Grid\\Action\\create.html.twig");
    }
}
