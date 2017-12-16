<?php

/* @SyliusAdmin/Product/Tab/_media.html.twig */
class __TwigTemplate_6e6ddaa2d6d8b8a7686774a2fba9150bf815b831a5cded4338ba843d75440822 extends Twig_Template
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
        $__internal_c518dd9c6b028a1780a3ddc51bd7f08532f8d3df85efb9a4c0dfb0c1e41e0b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c518dd9c6b028a1780a3ddc51bd7f08532f8d3df85efb9a4c0dfb0c1e41e0b4b->enter($__internal_c518dd9c6b028a1780a3ddc51bd7f08532f8d3df85efb9a4c0dfb0c1e41e0b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_media.html.twig"));

        $__internal_3ab0d85c4ff92b48622a9b2cc9e4e4a42d5a415329b3e0a5d064401249201ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab0d85c4ff92b48622a9b2cc9e4e4a42d5a415329b3e0a5d064401249201ea0->enter($__internal_3ab0d85c4ff92b48622a9b2cc9e4e4a42d5a415329b3e0a5d064401249201ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_media.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), array(0 => "@SyliusAdmin/Form/imagesTheme.html.twig"));
        // line 2
        echo "
<div class=\"ui tab\" data-tab=\"media\">
    <h3 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.media"), "html", null, true);
        echo "</h3>
    <br>
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "images", array()), 'row', array("label" => false));
        echo "

    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 8, $this->getSourceContext()); })())) . ".tab_media"), array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()))));
        echo "
</div>
";
        
        $__internal_c518dd9c6b028a1780a3ddc51bd7f08532f8d3df85efb9a4c0dfb0c1e41e0b4b->leave($__internal_c518dd9c6b028a1780a3ddc51bd7f08532f8d3df85efb9a4c0dfb0c1e41e0b4b_prof);

        
        $__internal_3ab0d85c4ff92b48622a9b2cc9e4e4a42d5a415329b3e0a5d064401249201ea0->leave($__internal_3ab0d85c4ff92b48622a9b2cc9e4e4a42d5a415329b3e0a5d064401249201ea0_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Tab/_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form '@SyliusAdmin/Form/imagesTheme.html.twig' %}

<div class=\"ui tab\" data-tab=\"media\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.media'|trans }}</h3>
    <br>
    {{ form_row(form.images, {'label': false}) }}

    {{ sonata_block_render_event('sylius.admin.product.' ~ action ~ '.tab_media', {'form': form}) }}
</div>
", "@SyliusAdmin/Product/Tab/_media.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Product\\Tab\\_media.html.twig");
    }
}
