<?php

/* @SyliusUi/Form/Buttons/_create.html.twig */
class __TwigTemplate_1338ccdeb0632e4d3d472ba04464b9c8ed45c1daa4ddf64acddff133e7dccaeb extends Twig_Template
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
        $__internal_9f4c515c62f6921cd42e33053dadfa091aefaba01cd5a3e7a4245fb0934752b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f4c515c62f6921cd42e33053dadfa091aefaba01cd5a3e7a4245fb0934752b8->enter($__internal_9f4c515c62f6921cd42e33053dadfa091aefaba01cd5a3e7a4245fb0934752b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/Buttons/_create.html.twig"));

        $__internal_8d2fe3bd257004181797d22cc8b4112dcdb021e423c4b94a0476928b38d54852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2fe3bd257004181797d22cc8b4112dcdb021e423c4b94a0476928b38d54852->enter($__internal_8d2fe3bd257004181797d22cc8b4112dcdb021e423c4b94a0476928b38d54852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/Buttons/_create.html.twig"));

        // line 1
        echo "<div class=\"ui basic segment\">
    <div class=\"ui buttons\">
        <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"plus icon\"></i>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create"), "html", null, true);
        echo "</button>
        ";
        // line 4
        $this->loadTemplate("@SyliusUi/Form/Buttons/_cancel.html.twig", "@SyliusUi/Form/Buttons/_create.html.twig", 4)->display(array_merge($context, array("path" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["paths"] ?? null), "cancel", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["paths"] ?? null), "cancel", array()), null)) : (null)))));
        // line 5
        echo "    </div>
</div>
";
        
        $__internal_9f4c515c62f6921cd42e33053dadfa091aefaba01cd5a3e7a4245fb0934752b8->leave($__internal_9f4c515c62f6921cd42e33053dadfa091aefaba01cd5a3e7a4245fb0934752b8_prof);

        
        $__internal_8d2fe3bd257004181797d22cc8b4112dcdb021e423c4b94a0476928b38d54852->leave($__internal_8d2fe3bd257004181797d22cc8b4112dcdb021e423c4b94a0476928b38d54852_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Form/Buttons/_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui basic segment\">
    <div class=\"ui buttons\">
        <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"plus icon\"></i>{{- 'sylius.ui.create'|trans -}}</button>
        {% include '@SyliusUi/Form/Buttons/_cancel.html.twig' with {'path': paths.cancel|default(null)} %}
    </div>
</div>
", "@SyliusUi/Form/Buttons/_create.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Form\\Buttons\\_create.html.twig");
    }
}
