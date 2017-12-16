<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_fdb97006da14a4eb6415b748415ae4b3c4861bff35cecf312da25236d4f4699b extends Twig_Template
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
        $__internal_2900bc95ebf7c4451fe6a245e57bf3f7f3afef24d3297a14a8b38acab9711a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2900bc95ebf7c4451fe6a245e57bf3f7f3afef24d3297a14a8b38acab9711a65->enter($__internal_2900bc95ebf7c4451fe6a245e57bf3f7f3afef24d3297a14a8b38acab9711a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_66fbf411f1abfa61d5cc0a0e5e492f999e933fb4911d7054aa3343b49d61dea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66fbf411f1abfa61d5cc0a0e5e492f999e933fb4911d7054aa3343b49d61dea1->enter($__internal_66fbf411f1abfa61d5cc0a0e5e492f999e933fb4911d7054aa3343b49d61dea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2900bc95ebf7c4451fe6a245e57bf3f7f3afef24d3297a14a8b38acab9711a65->leave($__internal_2900bc95ebf7c4451fe6a245e57bf3f7f3afef24d3297a14a8b38acab9711a65_prof);

        
        $__internal_66fbf411f1abfa61d5cc0a0e5e492f999e933fb4911d7054aa3343b49d61dea1->leave($__internal_66fbf411f1abfa61d5cc0a0e5e492f999e933fb4911d7054aa3343b49d61dea1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
