package org.crazyit.auction.action;

import java.util.*;
import com.opensymphony.xwork2.ActionContext;

import org.crazyit.auction.service.AuctionManager;
import org.crazyit.auction.business.*;
import org.crazyit.auction.exception.AuctionException;
import org.crazyit.auction.action.base.BaseAction;

/**
 * Description:
 * <br/>��վ: <a href="http://www.crazyit.org">���Java����</a>
 * <br/>Copyright (C), 2001-2012, Yeeku.H.Lee
 * <br/>This program is protected by copyright laws.
 * <br/>Program Name:
 * <br/>Date:
 * @author Yeeku.H.Lee kongyeeku@163.com
 * @version 1.0
 */
public class ViewFailAction extends BaseAction
{
	private List<ItemBean> failItems;

	public String execute()throws Exception
	{
		setFailItems(mgr.getFailItems());
		return SUCCESS;
	}

	// failItems��setter��getter����
	public void setFailItems(List<ItemBean> failItems)
	{
		this.failItems = failItems;
	}
	public List<ItemBean> getFailItems()
	{
		 return this.failItems;
	}
}