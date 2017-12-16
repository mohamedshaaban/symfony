<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_035bea9aab39a5dae7be1aedecb19abc1c59cadeb4610d72b9c24c8a29b6a958 extends Twig_Template
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
        $__internal_d1cc0bdfd44d33030ad508c1cf230ae69607861b6e2f835b31b7d82ba2deed37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1cc0bdfd44d33030ad508c1cf230ae69607861b6e2f835b31b7d82ba2deed37->enter($__internal_d1cc0bdfd44d33030ad508c1cf230ae69607861b6e2f835b31b7d82ba2deed37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_13d0e4f4eb261047ceb5fa87bfa7a48fcbb39bf8c19f82aac42046dac10a6ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d0e4f4eb261047ceb5fa87bfa7a48fcbb39bf8c19f82aac42046dac10a6ad1->enter($__internal_13d0e4f4eb261047ceb5fa87bfa7a48fcbb39bf8c19f82aac42046dac10a6ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d1cc0bdfd44d33030ad508c1cf230ae69607861b6e2f835b31b7d82ba2deed37->leave($__internal_d1cc0bdfd44d33030ad508c1cf230ae69607861b6e2f835b31b7d82ba2deed37_prof);

        
        $__internal_13d0e4f4eb261047ceb5fa87bfa7a48fcbb39bf8c19f82aac42046dac10a6ad1->leave($__internal_13d0e4f4eb261047ceb5fa87bfa7a48fcbb39bf8c19f82aac42046dac10a6ad1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
