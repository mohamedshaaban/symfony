<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4aeb7a5a5688a7b8f1f6aa4bb5a9d831d99a4d8cca378739dbb7f6fc26342152 extends Twig_Template
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
        $__internal_4f05bba83552b7dcec0c86704dbb2ed7d17c7a2a475f516a0e741cdc0bef74aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f05bba83552b7dcec0c86704dbb2ed7d17c7a2a475f516a0e741cdc0bef74aa->enter($__internal_4f05bba83552b7dcec0c86704dbb2ed7d17c7a2a475f516a0e741cdc0bef74aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_621d79f0bb0153d5f644046755ba60cae97692defbbe20d444365f52bca65ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621d79f0bb0153d5f644046755ba60cae97692defbbe20d444365f52bca65ffa->enter($__internal_621d79f0bb0153d5f644046755ba60cae97692defbbe20d444365f52bca65ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4f05bba83552b7dcec0c86704dbb2ed7d17c7a2a475f516a0e741cdc0bef74aa->leave($__internal_4f05bba83552b7dcec0c86704dbb2ed7d17c7a2a475f516a0e741cdc0bef74aa_prof);

        
        $__internal_621d79f0bb0153d5f644046755ba60cae97692defbbe20d444365f52bca65ffa->leave($__internal_621d79f0bb0153d5f644046755ba60cae97692defbbe20d444365f52bca65ffa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
