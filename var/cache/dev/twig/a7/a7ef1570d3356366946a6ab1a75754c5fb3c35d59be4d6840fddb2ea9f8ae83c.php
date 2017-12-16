<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_75f7acb67023cc536506f51473041fc62af4f1d67fd3aa1b21971ffb57472870 extends Twig_Template
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
        $__internal_351b1ce4fe0cb478946f49a0ff4042113473eb2175b19dc6d2cce85da4aa5e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351b1ce4fe0cb478946f49a0ff4042113473eb2175b19dc6d2cce85da4aa5e8c->enter($__internal_351b1ce4fe0cb478946f49a0ff4042113473eb2175b19dc6d2cce85da4aa5e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_357f90149b13039ab94345be8f4906b6163f944ae241e056d24ff587a8008df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357f90149b13039ab94345be8f4906b6163f944ae241e056d24ff587a8008df1->enter($__internal_357f90149b13039ab94345be8f4906b6163f944ae241e056d24ff587a8008df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_351b1ce4fe0cb478946f49a0ff4042113473eb2175b19dc6d2cce85da4aa5e8c->leave($__internal_351b1ce4fe0cb478946f49a0ff4042113473eb2175b19dc6d2cce85da4aa5e8c_prof);

        
        $__internal_357f90149b13039ab94345be8f4906b6163f944ae241e056d24ff587a8008df1->leave($__internal_357f90149b13039ab94345be8f4906b6163f944ae241e056d24ff587a8008df1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
