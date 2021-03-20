<?php 
namespace Drupal\custom_node\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

Class CustomnodeCreation extends Controllerbase{
	public function content(){
		print_r($cat_fact[data][team][1]);
	 $node = Node::create(['type' => 'team']);
	 $node->set('title','test node');
	 $node->set('field_id',$cat_fact[data][team][0][id]);
	 $node->set('field_name',$cat_fact[data][team][0][name]);
	 $node->set('field_nickname',$cat_fact[data][team][0][nickname]);
	 $node->set('field_display_name',$cat_fact[data][team][0][display_name]);
	 $node->set('field_division',$cat_fact[data][team][0][division]);
	 $node->set('field_conference',$cat_fact[data][team][0][conference]);
	 $node->status = 1;
	 $node->save();
	 return drupal_set_message("Node with nid " . $node->id() . " saved!\n");
	} 
 }
