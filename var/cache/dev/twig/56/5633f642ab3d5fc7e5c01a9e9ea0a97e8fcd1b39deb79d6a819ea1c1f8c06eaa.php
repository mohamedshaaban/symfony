<?php

/* SyliusUiBundle:Modal:_confirmation.html.twig */
class __TwigTemplate_1c153900c56b9c31b286123e971495b7f8b61ebd1b26192a3b561e22ce2eb5da extends Twig_Template
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
        $__internal_429185f6136a99184277736549901f138b43469726aab593e2b9294c84f915b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429185f6136a99184277736549901f138b43469726aab593e2b9294c84f915b4->enter($__internal_429185f6136a99184277736549901f138b43469726aab593e2b9294c84f915b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Modal:_confirmation.html.twig"));

        $__internal_c50c71fe38e88b8f4a1b50188ad52213344748aa8b322beb72a0707c84765d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50c71fe38e88b8f4a1b50188ad52213344748aa8b322beb72a0707c84765d63->enter($__internal_c50c71fe38e88b8f4a1b50188ad52213344748aa8b322beb72a0707c84765d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Modal:_confirmation.html.twig"));

        // line 1
        echo "<div class=\"ui small basic modal\" id=\"confirmation-modal\">
    <div class=\"ui icon header\">
        <i class=\"warning sign icon\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.confirm_your_action"), "html", null, true);
        echo "
    </div>
    <div class=\"content\">
        <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.are_your_sure_you_want_to_perform_this_action"), "html", null, true);
        echo "</p>
    </div>
    <div class=\"actions\">
        <div class=\"ui red basic cancel inverted button\">
            <i class=\"remove icon\"></i>
            ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_label"), "html", null, true);
        echo "
        </div>
        <div class=\"ui green ok inverted button\" id=\"confirmation-button\">
            <i class=\"checkmark icon\"></i>
            ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.yes_label"), "html", null, true);
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_429185f6136a99184277736549901f138b43469726aab593e2b9294c84f915b4->leave($__internal_429185f6136a99184277736549901f138b43469726aab593e2b9294c84f915b4_prof);

        
        $__internal_c50c71fe38e88b8f4a1b50188ad52213344748aa8b322beb72a0707c84765d63->leave($__internal_c50c71fe38e88b8f4a1b50188ad52213344748aa8b322beb72a0707c84765d63_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Modal:_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  44 => 12,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui small basic modal\" id=\"confirmation-modal\">
    <div class=\"ui icon header\">
        <i class=\"warning sign icon\"></i>
        {{ 'sylius.ui.confirm_your_action'|trans }}
    </div>
    <div class=\"content\">
        <p>{{ 'sylius.ui.are_your_sure_you_want_to_perform_this_action'|trans }}</p>
    </div>
    <div class=\"actions\">
        <div class=\"ui red basic cancel inverted button\">
            <i class=\"remove icon\"></i>
            {{ 'sylius.ui.no_label'|trans }}
        </div>
        <div class=\"ui green ok inverted button\" id=\"confirmation-button\">
            <i class=\"checkmark icon\"></i>
            {{ 'sylius.ui.yes_label'|trans }}
        </div>
    </div>
</div>
", "SyliusUiBundle:Modal:_confirmation.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Modal/_confirmation.html.twig");
    }
}
