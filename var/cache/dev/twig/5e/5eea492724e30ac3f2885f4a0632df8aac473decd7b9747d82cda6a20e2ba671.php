<?php

/* @SyliusUi/Form/Buttons/_update.html.twig */
class __TwigTemplate_95e6f2e492ed0c36753bdac3998ccda778a5a5c9dca65c2da29ba1b0084e159b extends Twig_Template
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
        $__internal_8198ab7d5fb3b1b3b51979f2c6514b97f290bf70db3a6b8147446aaf5dc97b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8198ab7d5fb3b1b3b51979f2c6514b97f290bf70db3a6b8147446aaf5dc97b20->enter($__internal_8198ab7d5fb3b1b3b51979f2c6514b97f290bf70db3a6b8147446aaf5dc97b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/Buttons/_update.html.twig"));

        $__internal_1732c05ccaa38d658010b43a8dd166d8d0ea041c19ae8573d173fd2f7498eb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1732c05ccaa38d658010b43a8dd166d8d0ea041c19ae8573d173fd2f7498eb01->enter($__internal_1732c05ccaa38d658010b43a8dd166d8d0ea041c19ae8573d173fd2f7498eb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/Buttons/_update.html.twig"));

        // line 1
        echo "<div class=\"ui basic segment\">
    <div class=\"ui buttons\">
        <button class=\"ui labeled icon primary button\" type=\"submit\" id=\"sylius_save_changes_button\"><i class=\"save icon\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.save_changes"), "html", null, true);
        echo "</button>
        ";
        // line 4
        $this->loadTemplate("@SyliusUi/Form/Buttons/_cancel.html.twig", "@SyliusUi/Form/Buttons/_update.html.twig", 4)->display(array_merge($context, array("path" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["paths"] ?? null), "cancel", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["paths"] ?? null), "cancel", array()), null)) : (null)))));
        // line 5
        echo "    </div>
</div>
";
        
        $__internal_8198ab7d5fb3b1b3b51979f2c6514b97f290bf70db3a6b8147446aaf5dc97b20->leave($__internal_8198ab7d5fb3b1b3b51979f2c6514b97f290bf70db3a6b8147446aaf5dc97b20_prof);

        
        $__internal_1732c05ccaa38d658010b43a8dd166d8d0ea041c19ae8573d173fd2f7498eb01->leave($__internal_1732c05ccaa38d658010b43a8dd166d8d0ea041c19ae8573d173fd2f7498eb01_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Form/Buttons/_update.html.twig";
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
", "@SyliusUi/Form/Buttons/_update.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Form\\Buttons\\_update.html.twig");
    }
}
