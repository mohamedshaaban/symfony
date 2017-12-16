<?php

/* @SyliusUi/Grid/Field/rawLabel.html.twig */
class __TwigTemplate_2b8c3191cd401a42e6553553af8348fa683ccb5bc7a639c94aa23156a3a2f5eb extends Twig_Template
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
        $__internal_34ae8c7740047f3f3e7fc5774786474f0720b430513a767fe4ee712b2afeda86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ae8c7740047f3f3e7fc5774786474f0720b430513a767fe4ee712b2afeda86->enter($__internal_34ae8c7740047f3f3e7fc5774786474f0720b430513a767fe4ee712b2afeda86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Field/rawLabel.html.twig"));

        $__internal_04eee5b6258ce9e945e1b9dae435230444623e8198aa7a92665c7ffac98ee5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04eee5b6258ce9e945e1b9dae435230444623e8198aa7a92665c7ffac98ee5f8->enter($__internal_04eee5b6258ce9e945e1b9dae435230444623e8198aa7a92665c7ffac98ee5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Field/rawLabel.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusUi/Label/_default.html.twig", "@SyliusUi/Grid/Field/rawLabel.html.twig", 1)->display(array_merge($context, array("value" => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_34ae8c7740047f3f3e7fc5774786474f0720b430513a767fe4ee712b2afeda86->leave($__internal_34ae8c7740047f3f3e7fc5774786474f0720b430513a767fe4ee712b2afeda86_prof);

        
        $__internal_04eee5b6258ce9e945e1b9dae435230444623e8198aa7a92665c7ffac98ee5f8->leave($__internal_04eee5b6258ce9e945e1b9dae435230444623e8198aa7a92665c7ffac98ee5f8_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/Field/rawLabel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@SyliusUi/Label/_default.html.twig' with {'value': data} %}
", "@SyliusUi/Grid/Field/rawLabel.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Grid\\Field\\rawLabel.html.twig");
    }
}
