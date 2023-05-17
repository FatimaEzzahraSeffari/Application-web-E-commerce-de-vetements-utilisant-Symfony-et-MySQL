<?php
namespace App\Form;
use App\Entity\Produit;
use App\Entity\Category;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
class ProduitEditType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('name', TextType::class)
->add('price', TextareaType::class)
->add('img', TextType::class)
->add('description', TextType::class)
->add('category', EntityType::class, [
    'class' => Category::class,
    'choice_label' => 'name',
    'placeholder' => 'Select a category',

]);
}
public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}