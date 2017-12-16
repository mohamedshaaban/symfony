<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_26b9336e76df871812b740a1666169b162ccc737cce7b0e6246daabf3a96cf09 extends Twig_Template
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
        $__internal_6f790f7b645eb0a6a2631f66330c2ba97e5ae54b977df98f788e9d8254a94b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f790f7b645eb0a6a2631f66330c2ba97e5ae54b977df98f788e9d8254a94b5a->enter($__internal_6f790f7b645eb0a6a2631f66330c2ba97e5ae54b977df98f788e9d8254a94b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_94c3a377f2ca1cd5ee23a3238ff65ef34593f4e35c18542b2eb34aa696e5ec4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c3a377f2ca1cd5ee23a3238ff65ef34593f4e35c18542b2eb34aa696e5ec4c->enter($__internal_94c3a377f2ca1cd5ee23a3238ff65ef34593f4e35c18542b2eb34aa696e5ec4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6f790f7b645eb0a6a2631f66330c2ba97e5ae54b977df98f788e9d8254a94b5a->leave($__internal_6f790f7b645eb0a6a2631f66330c2ba97e5ae54b977df98f788e9d8254a94b5a_prof);

        
        $__internal_94c3a377f2ca1cd5ee23a3238ff65ef34593f4e35c18542b2eb34aa696e5ec4c->leave($__internal_94c3a377f2ca1cd5ee23a3238ff65ef34593f4e35c18542b2eb34aa696e5ec4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
