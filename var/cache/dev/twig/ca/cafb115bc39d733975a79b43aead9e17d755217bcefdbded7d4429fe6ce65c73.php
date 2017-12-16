<?php

/* SyliusUiBundle:Form/Buttons:_update.html.twig */
class __TwigTemplate_7ace6a920b9a4033c95a6e60493886828256904d85e526ddca2ff9e1bcfc3b33 extends Twig_Template
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
        $__internal_6fe54a3f54dc03528aa64c8d466f6d9923b26980badddc1408471ce499380370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fe54a3f54dc03528aa64c8d466f6d9923b26980badddc1408471ce499380370->enter($__internal_6fe54a3f54dc03528aa64c8d466f6d9923b26980badddc1408471ce499380370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form/Buttons:_update.html.twig"));

        $__internal_db5d7d0a21f1ba771899fbafb16511d3337ce7a4d7289c120adf16e5344fbd20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5d7d0a21f1ba771899fbafb16511d3337ce7a4d7289c120adf16e5344fbd20->enter($__internal_db5d7d0a21f1ba771899fbafb16511d3337ce7a4d7289c120adf16e5344fbd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form/Buttons:_update.html.twig"));

        // line 1
        echo "<div class=\"ui basic segment\">
    <div class=\"ui buttons\">
        <button class=\"ui labeled icon primary button\" type=\"submit\" id=\"sylius_save_changes_button\"><i class=\"save icon\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.save_changes"), "html", null, true);
        echo "</button>
        ";
        // line 4
        $this->loadTemplate("@SyliusUi/Form/Buttons/_cancel.html.twig", "SyliusUiBundle:Form/Buttons:_update.html.twig", 4)->display(array_merge($context, array("path" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["paths"] ?? null), "cancel", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["paths"] ?? null), "cancel", array()), null)) : (null)))));
        // line 5
        echo "    </div>
</div>
";
        
        $__internal_6fe54a3f54dc03528aa64c8d466f6d9923b26980badddc1408471ce499380370->leave($__internal_6fe54a3f54dc03528aa64c8d466f6d9923b26980badddc1408471ce499380370_prof);

        
        $__internal_db5d7d0a21f1ba771899fbafb16511d3337ce7a4d7289c120adf16e5344fbd20->leave($__internal_db5d7d0a21f1ba771899fbafb16511d3337ce7a4d7289c120adf16e5344fbd20_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Form/Buttons:_update.html.twig";
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
        <button class=\"ui labeled icon primary button\" type=\"submit\" id=\"sylius_save_changes_button\"><i class=\"save icon\"></i> {{ 'sylius.ui.save_changes'|trans }}</button>
        {% include '@SyliusUi/Form/Buttons/_cancel.html.twig' with {'path': paths.cancel|default(null)} %}
    </div>
</div>
", "SyliusUiBundle:Form/Buttons:_update.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Form/Buttons/_update.html.twig");
    }
}
