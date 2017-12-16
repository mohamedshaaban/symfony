<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3ff436c0700e70c9a3912c3c374912ff64b47da5cae377df23aa2677ebd24c61 extends Twig_Template
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
        $__internal_043b15c845d2028b60bd10db7e59e081e179717e9d4dbefe3326a67604034736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_043b15c845d2028b60bd10db7e59e081e179717e9d4dbefe3326a67604034736->enter($__internal_043b15c845d2028b60bd10db7e59e081e179717e9d4dbefe3326a67604034736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_cedcfb2067cfd24e69930cb1a5af71344ecda9ef61c979afe7f8cde73134cf26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cedcfb2067cfd24e69930cb1a5af71344ecda9ef61c979afe7f8cde73134cf26->enter($__internal_cedcfb2067cfd24e69930cb1a5af71344ecda9ef61c979afe7f8cde73134cf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_043b15c845d2028b60bd10db7e59e081e179717e9d4dbefe3326a67604034736->leave($__internal_043b15c845d2028b60bd10db7e59e081e179717e9d4dbefe3326a67604034736_prof);

        
        $__internal_cedcfb2067cfd24e69930cb1a5af71344ecda9ef61c979afe7f8cde73134cf26->leave($__internal_cedcfb2067cfd24e69930cb1a5af71344ecda9ef61c979afe7f8cde73134cf26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
